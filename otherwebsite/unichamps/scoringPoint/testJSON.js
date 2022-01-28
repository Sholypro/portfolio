window.addEventListener("load", function(){

   

  //Comparer Function    
  function GetSortOrder(prop)
  {    
      return function(a, b)
      {    
          if (a[prop] < b[prop])
          {    
              return 1;    
          }
          else if (a[prop] > b[prop]) 
          {    
              return -1;    
          }     
          return 0;    
      }    
  }

  teams.sort(GetSortOrder("Points"));
  
  for (var i=0; i<9; i++)
  {
      var position = 1;
      row = document.createElement("tr");
      cellC = document.createElement("td");
      cellA = document.createElement("td");
      cellB = document.createElement("td");
 
      // (C3) KEY & VALUE
      cellC.innerHTML = i+1;
      cellA.innerHTML = teams[i].Name;
      cellB.innerHTML = teams[i].Points;
 
      // (C4) ATTACH ROW & CELLS
      document.getElementById("Leaderboard").appendChild(row);
      row.appendChild(cellC);
      row.appendChild(cellA);
      row.appendChild(cellB);
      cellC.setAttribute("class", "Rank");
      cellA.setAttribute("class", "Team");
      cellB.setAttribute("class", "Points");
      position++;
      
  }


});