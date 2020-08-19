<script>
  let updateButtons = document.getElementsByClassName("update");
  for (let updateButton of updateButtons) {
    updateButton.addEventListener("click", () => {
      let event;
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          event = JSON.parse(this.responseText)[0];
        }
      };
      xhttp.open("GET", `get_json.php?table=events&id=${updateButton.dataset.id}`, false);
      xhttp.send();
      document.getElementById("title").value = event.title;
      document.getElementById("date").value = event.date;
      document.getElementById("time").value = event.time;
      document.getElementById("description").value = event.description;
      document.getElementById("place").value = event.place;
      let update_key = document.createElement("INPUT");
      update_key.type = "hidden";
      update_key.name = "update_key";
      update_key.value = "id";
      document.getElementById("event-form").appendChild(update_key);
      let update_value = document.createElement("INPUT");
      update_value.type = "hidden";
      update_value.name = "update_value";
      update_value.value = updateButton.dataset.id;
      document.getElementById("event-form").appendChild(update_value);
      document.getElementById("event-form").action = "db_update_general.php";
      $('#exampleModalLong').modal('show');
    })
  }
</script>