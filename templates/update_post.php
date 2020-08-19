<script>
  let updateButtons = document.getElementsByClassName("update");
  for (let updateButton of updateButtons) {
    updateButton.addEventListener("click", () => {
      let post;
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          post = JSON.parse(this.responseText)[0];
        }
      };
      xhttp.open("GET", `get_json.php?table=posts&id=${updateButton.dataset.id}`, false);
      xhttp.send();
      document.getElementById("title").value = post.title;
      document.getElementById("post").value = post.post;
      let update_key = document.createElement("INPUT");
      update_key.type = "hidden";
      update_key.name = "update_key";
      update_key.value = "id";
      document.getElementById("post-form").appendChild(update_key);
      let update_value = document.createElement("INPUT");
      update_value.type = "hidden";
      update_value.name = "update_value";
      update_value.value = updateButton.dataset.id;
      document.getElementById("post-form").appendChild(update_value);
      document.getElementById("post-form").action = "db_update_general.php";
      $('#postModal').modal('show');
    })
  }
</script>