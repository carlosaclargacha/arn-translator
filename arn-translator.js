const aminoacids_list = ['A', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'Y'];
const standar_code = {
  aminoacid_to_rna: {
    A: ["GCU", "GCC", "GCA", "GCG"],
    C: ["UGU", "UGC"],
    D: ["GAU", "GAC"],
    E: ["GAA", "GAG"],
    F: ["UUU", "UUC"],
    G: ["GGU", "GGC", "GGA", "GGG"],
    H: ["CAU", "CAC"],
    I: ["AUU", "AUC", "AUA"],
    K: ["AAA", "AAG"],
    L: ["UUA", "UUG", "CUU", "CUC", "CUA", "CUG"],
    M: ["AUG"],
    N: ["AAU", "AAC"],
    P: ["CCU", "CCC", "CCA", "CCG"],
    Q: ["CAA", "CAG"],
    R: ["AGA", "AGG"],
    S: ["UCU", "UCC", "UCA", "UCG"],
    T: ["ACU", "ACC", "ACA", "ACG"],
    V: ["GUU", "GUC", "GUA", "GUG"],
    W: ["UGG"],
    Y: ["UAU", "UAC"]
  }
}
const rna_to_dna = {
  C: "G",
  G: "C",
  U: "A",
  A: "T"
}

const aminoacidsToRNA = standar_code.aminoacid_to_rna;

function validateEntry(event){
  var chart = event.key.toUpperCase();
  var key = event.keyCode || event.charCode;
  if( key == 8 || key == 46 )
    return true;
  if(aminoacids_list.indexOf(chart) != -1){
    return true;
  } else {
    return false;
  }
}

function transformAmino(){
  const adminoSequence = $("#aminoTextInput").val().toUpperCase();
  let arnSequence = "";
  let adnSequence = "";
  let actualChart;
  for (var x = 0; x < adminoSequence.length; x++) {
    actualChart = adminoSequence.charAt(x);
    arnSequence += ' ' + aminoacidsToRNA[actualChart][0];
  }

  for (var x = 0; x < arnSequence.length; x++) {
    actualChart = arnSequence.charAt(x);
    console.log(actualChart);
    if(actualChart == " "){
      adnSequence += " ";
    } else {
      adnSequence += rna_to_dna[actualChart];
    }
    
}
  
  $("#arnTextInput").val(arnSequence);
  $("#adnTextInput").val(adnSequence);
  
}