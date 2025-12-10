const form = document.getElementById("ticketForm");
const audio = document.getElementById("successSound");

form.addEventListener("submit", function(e){
  e.preventDefault();

  const fd = new FormData();
  fd.append("fullname", document.getElementById("fullname").value);
  fd.append("faculty", document.getElementById("faculty").value);
  fd.append("specialty", document.getElementById("specialty").value);
  fd.append("group", document.getElementById("group").value);
  fd.append("service", document.getElementById("service").value);

  fetch("take_ticket.php", {
    method: "POST",
    body: fd
  })
  .then(r=>r.json())
  .then(d=>{
    if(d.ok){
      audio.play();

      document.getElementById("ticketId").innerText = d.ticket.ticketNumber;

      const qrText = encodeURIComponent(
        `Bilet:${d.ticket.ticketNumber}`
      );

      document.getElementById("ticketQR").src =
        `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrText}`;

      document.getElementById("result").classList.remove("hidden");
      form.reset();
    }
  });
});

// növbə yoxlama (bildiriş səsi)
setInterval(()=>{
  fetch("check_turn.php")
    .then(r=>r.json())
    .then(d=>{
      if(d.ok && d.called){
        alert("Sizin növbəniz çatdı!");
        audio.play();
      }
    })
},5000);
