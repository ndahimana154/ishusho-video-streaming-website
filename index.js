const express = require('express');
const path = require('path');
const app = express();
const PORT = process.env.PORT || 5000;
const defaultLocation = 'public';

app.use(express.static(defaultLocation)); 


app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname,'index.html'));
})

app.listen(PORT, () => console.log(`Server started on PORT ${PORT}`));
