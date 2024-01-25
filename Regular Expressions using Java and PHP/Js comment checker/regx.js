var input = document.getElementById("myFile");
var output = document.getElementById("output");
let text = "";

/**
 * Event lister, triggers when a file is choosen
 */
input.addEventListener("change", function () {
    if (this.files && this.files[0]) {
        var myFile = this.files[0];
        var reader = new FileReader();

        reader.addEventListener('load', function (e) {
            text = e.target.result;
        });

        reader.readAsBinaryString(myFile);
    }
});

/**
 * On click event listener to remove the comments from choosen file
 */
let onClick = () => {
    if (text === "") {
        output.textContent = "Please add the file"
    } else {
        output.textContent = removeComments(text);
    }
}

/**
 * 
 * @param str contains text that was read from the file 
 * @returns all invalid comments & the result text after removing comments. 
 */
let removeComments = (str) => {
    let result = str.replace(/\/\*[\s\S]*?\*\/|\/\/.*/g, ''); // Remove all valid comments

    let invalidComment2 = /(?:(?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*\*\n))/g; // For multiline comment ending with **

    let invalidComment3 = /\/[ X][\s\S]*?\*\/|\/\*[\s\S]*?[^X]\n/g; // For the mutiline comment that didt end and at start single slash without a star following. (Has to be done after removing valid comments)

    const invalidArrComments1 = [...str.matchAll(invalidComment2)];
    const invalidArrComments2 = [...result.matchAll(invalidComment3)];
    const invalidCommentsArray = invalidArrComments1.concat(invalidArrComments2)

    result = "\n##################################\n\nRESULT AFTER REMOVING COMMENTS\n\n##################################\n\n" + result 
    
    if (invalidCommentsArray.length > 0) {
        let errorText = "\n##################################\n\nINVALID COMMENTS\n\n##################################\n\n"
        invalidCommentsArray.forEach(element => {
            errorText = errorText + "    ------------------------------\n";
            errorText = errorText + "    -> At index: " + element['index'] + "\n";
            errorText = errorText + "    " + element[0] + "\n";
            errorText = errorText + "    ------------------------------\n\n";
        });
        result = errorText + result;
    }
    return result;
}