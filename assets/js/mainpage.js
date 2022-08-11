var pieceSet = {
    white: {
        a1: "assets\img\white_rook.svg",
        a2:"assets\img\black_knight.svg",
        a3:"assets\img\white_bishop.svg",
        a4:"assets\img\white_king.svg",
        a5:"assets\img\black_queen.svg",
        a6:"assets\img\white_bishop.svg",
        a7: "assets\img\black_knight.svg",
        a8: "assets\img\white_rook.svg"
    },
    black:{

    }
}


flipBoard = color => {
    var whiteBoard = document.getElementById("white-board");
    var blackBoard = document.getElementById("black-board");

    console.log(whiteBoard); console.log(blackBoard);

    if(whiteBoard.style.display.includes("none")){
        blackBoard.style.display = "none";
        whiteBoard.style.display = "";
    } else if(blackBoard.style.display.includes("none")){
        blackBoard.style.display = "";
        whiteBoard.style.display = "none";
    }
}

var letters = ["A", "B", "C", "D", "E", "F", "G", "H"];

generateBoard = color => {
    var mainView = document.getElementById("app");
    var whiteBoard = document.createElement("div");

    whiteBoard.classList.add("container-fluid", "px-4", "chess-board");
    whiteBoard.setAttribute('id','white-board');
    whiteBoard.style.display = "";
    
    for(let i = 0,whiteRowNo = 7; i < 8; i++,whiteRowNo--){
        let tempRow = document.createElement("div");
        tempRow.classList.add("row");
        let blackRowNo = i + 1;

        for(let j = 0, blackLetterIndex = 7; j < 8; j++,blackLetterIndex--){
            let tempField = document.createElement("div");
            tempField.classList.add("col-sm", "chess-field");
            if((j - i) % 2 !== 0){   // Generate alternating chess pattern
                tempField.classList.add("bg-black");
            }
            if(color == "black")
                tempField.innerText = letters[blackLetterIndex] + blackRowNo;
            else
                tempField.innerText = letters[j] + (whiteRowNo + 1);
            tempRow.appendChild(tempField);
        }

        whiteBoard.appendChild(tempRow);
    }

    mainView.appendChild(whiteBoard);
}

generateBoard("white");