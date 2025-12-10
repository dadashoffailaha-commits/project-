<!DOCTYPE html>
<html lang="az">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>SmartQueue - Tələbə Növbə Sistemi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<audio id="successSound" src="audio/success.mp3" preload="auto"></audio>

<header>
  <h1>SmartQueue - Tələbə Növbə Sistemi</h1>
  <img src="wcu logo(1).png" class="logo">
</header>

<main>
  <form id="ticketForm">
    <h2>Bilet Qeydiyyat Formu</h2>

    <label>Ad Soyad:</label>
    <input type="text" id="fullname" required>

    <label>Fakültə:</label>
    <select id="faculty" required>
      <option value="">Fakültə seçin</option>
    </select>

    <label>İxtisas:</label>
    <select id="specialty" required>
      <option value="">İxtisas seçin</option>
    </select>

    <label>Qrup:</label>
    <input type="text" id="group">

    <label>Xidmət növü:</label>
    <select id="service" required>
      <option value="">Xidmət seçin</option>
      <option>Dekanlıq</option>
      <option>Qəbul otağı</option>
      <option>Maliyyə şöbəsi</option>
      <option>Tələbə məsələləri</option>
    </select>

    <button type="submit">Növbə Al</button>
  </form>

  <section id="result" class="hidden">
    <h3>Növbəniz yaradıldı</h3>
    <p><b>Bilet №:</b> <span id="ticketId"></span></p>
    <img id="ticketQR">
  </section>
</main>

<script src="script.js"></script>
</body>
</html>
