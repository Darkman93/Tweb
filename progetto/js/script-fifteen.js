/**
 Codice Javascript riguardante il gioco del quindici. Non appena cliccato il pulsante "shuffle"
 viene richiamata la funzione per mescolare i div in cui sono contenute le immagini. Le altre funzioni
 si occupano della gestione del movimento delle caselle, quando l'utente clicca su di esse.
 */

"use strict";

var emptyCellX = 300;
var emptyCellY = 300;

window.onload = function()
{
  cellInit();
  $("shufflebutton").observe("click" , shuffle);

};

function cellInit()
{
  //select all the cells
  var cells = $$("#puzzlearea div");

  for (var i = 0 ; i < cells.length ; i++)
  {
    //left position (in pixels) = 100 * (i/4)
    var cellX = 100*(i%4);
    cellX += "px";
    //top position (in pixels) = 100 * (i%4)
    var cellY = 100*(Math.floor(i/4));
    cellY += "px";

    cells[i].style.left = cellX;
    cells[i].style.top = cellY;

    cells[i].style.backgroundPosition = "-" + cellX + " -" + cellY;

    cells[i].observe("click" , shift);
    cells[i].observe("mouseover" , red);
    cells[i].observe("mouseout" , black);
  }
}

function red(event)
{
  var cell = event.element();
  if(checkIfNearEmpty(cell))
  {
    cell.style.border = "red solid 5px";
    cell.style.color = "red";
  }
}

function black(event)
{
  var cell = event.element();
  cell.style.border = "black solid 5px";
  cell.style.color = "black";
}

function shift(event)
{
  var cell = event.element();
  if(checkIfNearEmpty(cell))
  {
    move(cell);
  }
}

function checkIfNearEmpty(cell)
{
  var cellX = parseInt(cell.style.left);
  var cellY = parseInt(cell.style.top);

  if(emptyCellX == cellX && (emptyCellY == cellY + 100 || emptyCellY == cellY - 100) || emptyCellY == cellY && (emptyCellX == cellX + 100 || emptyCellX == cellX - 100))
  {
    return true;
  }
  return false;
}

function move(cell)
{
  var tempX = parseInt(cell.style.left);
  var tempY = parseInt(cell.style.top);

  cell.style.left = emptyCellX + "px";
  cell.style.top = emptyCellY + "px";

  emptyCellX = tempX;
  emptyCellY = tempY;
}

function shuffle()
{
  var cells = $$("#puzzlearea div");
  for(var i = 0 ; i < 1000 ; i++)
  {
    var cell = cells[Math.floor(Math.random() * 15)];
    if(checkIfNearEmpty(cell))
    {
      move(cell);
    }
  }
}