<html>
  <body>
<select id="bus-id">
  <option value="">Select a bus</option>
  <option value="bus-1">Bus 1</option>
  <option value="bus-2">Bus 2</option>
  <option value="bus-3">Bus 3</option>
  <option value="bus-4">Bus 4</option>
  <option value="bus-5">Bus 5</option>
  <option value="bus-6">Bus 6</option>
</select>

<select id="bus-seats">
  <option value="">Select a bus first</option>
</select>


<button id="reset-btn">Reset</button>
<input type="text" id = "lee" value="">
<div id="removed-seats"></div>

</body>

<script>
  const busSeatsOriginal = {
    "bus-1": [...Array(60).keys()].map(i => `A${i+1}`),
    "bus-2": [...Array(60).keys()].map(i => `B${i+1}`),
    "bus-3": [...Array(60).keys()].map(i => `C${i+1}`),
    "bus-4": [...Array(60).keys()].map(i => `D${i+1}`),
    "bus-5": [...Array(60).keys()].map(i => `E${i+1}`),
    "bus-6": [...Array(60).keys()].map(i => `F${i+1}`)
  };
  
  const busIdSelect = document.getElementById("bus-id");
  const busSeatsSelect = document.getElementById("bus-seats");
  const resetBtn = document.getElementById("reset-btn");
  

  let seats = [];
  
  busIdSelect.addEventListener("change", () => {
    const selectedBusId = busIdSelect.value;
    seats = busSeatsOriginal[selectedBusId].slice(); // make a copy
    
    // Remove existing options
    while (busSeatsSelect.firstChild) {
      busSeatsSelect.removeChild(busSeatsSelect.firstChild);
    }
    
    // Add new options
    if (seats) {
      seats.forEach(seat => {
        const option = document.createElement("option");
        option.value = seat;
        option.textContent = seat;
        busSeatsSelect.appendChild(option);
      });
    } else {
      const option = document.createElement("option");
      option.value = "";
      option.textContent = "Select a bus first";
      busSeatsSelect.appendChild(option);
    }
  });
  
  resetBtn.addEventListener("click", () => {
    const selectedBusId = busIdSelect.value;
    seats = busSeatsOriginal[selectedBusId].slice(); // make a copy
    
    // Remove existing options
    while (busSeatsSelect.firstChild) {
      busSeatsSelect.removeChild(busSeatsSelect.firstChild);
    }
    
    // Add new options
    if (seats) {
      seats.forEach(seat => {
        const option = document.createElement("option");
        option.value = seat;
        option.textContent = seat;
        busSeatsSelect.appendChild(option);
      });
    } else {
      const option = document.createElement("option");
      option.value = "";
      option.textContent = "Select a bus first";
      busSeatsSelect.appendChild(option);
    }
  });
  
  busSeatsSelect.addEventListener("change", () => {
    const selectedSeat = busSeatsSelect.value;
    if (selectedSeat) {
      const index = seats.indexOf(selectedSeat);

      if (index > -1){
     // seats.splice(index, 1);
     const removedSeat = seats.splice(index, 1)[0]; // remove the seat and get the removed seat
      const removedSeatsDiv = document.getElementById("removed-seats"); // get the removed seats div

      // update the removed seats div with the removed seat
      removedSeatsDiv.textContent = `Removed seat: ${removedSeat}`;
      document.getElementById("lee").value = removedSeat;
  
  // Remove existing options
  while (busSeatsSelect.firstChild) {
    busSeatsSelect.removeChild(busSeatsSelect.firstChild);
  }
  
  // Add new options
  seats.forEach(seat => {
    const option = document.createElement("option");
    option.value = seat;
    option.textContent = seat;
    busSeatsSelect.appendChild(option);
  });
}
}
    });

</script>


</html>