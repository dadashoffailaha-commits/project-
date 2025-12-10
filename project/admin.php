<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
</head>
<body>

<h2>Növbəti bileti çağır</h2>
<button onclick="callNext()">Çağır</button>

<h3 id="result"></h3>

<script>
function callNext(){
  fetch("call_next.php")
    .then(r=>r.json())
    .then(d=>{
      if(d.ok){
        document.getElementById("result").innerText =
          "İndi çağırılan: " + d.ticket.ticket_number;
      }
    })
}
</script>
</body>
</html>
