// Complete the solution so that it reverses all of the words within the string passed in.

//     Example:

// reverseWords("The greatest victory is that which requires no battle")
// should return "battle no requires which that is victory greatest The"

function reverseWords(str) {
    var str2 = str.split(' ');
    balik = str2.reverse();
    gabung = balik.join(' ');
    return gabung;
}

document.getElementById("value").innerHTML = reverseWords("yoda doesn't speak like this" );