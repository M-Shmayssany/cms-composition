function cellapseAni() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
      console.log('one');
    } else {
      x.className = "topnav";
      console.log('two');
    }
  }