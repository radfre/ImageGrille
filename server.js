const express = require("express");
const path = require("path");

const app = express();
const PORT = process.env.PORT || 3000;

const publicDir = __dirname;

app.use(express.static(publicDir));

// Default route -> index.html
app.get("/", (_req, res) => {
  res.sendFile(path.join(publicDir, "index.html"));
});

app.listen(PORT, () => {
  console.log(`Battle.net 90s site running at http://localhost:${PORT}`);
});


