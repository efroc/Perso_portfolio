function showContent(contentId) {
    // Cacher tous les contenus
    var contents = document.querySelectorAll('.content');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    // Afficher le contenu correspondant
    var selectedContent = document.getElementById(contentId);
    selectedContent.style.display = 'flex';
}


document.getElementById("language-button").addEventListener("click", function() {
    // Sélectionner les éléments par leur classe
    var frenchContent = document.querySelectorAll(".fr");
    var englishContent = document.querySelectorAll(".en");
  
    // Basculer la visibilité des éléments
    if (frenchContent[0].style.display === 'none') {
        // Afficher les éléments en français et cacher ceux en anglais
        frenchContent.forEach(p => p.style.display = 'block');
        englishContent.forEach(p => p.style.display = 'none');
    } else {
        // Afficher les éléments en anglais et cacher ceux en français
        frenchContent.forEach(p => p.style.display = 'none');
        englishContent.forEach(p => p.style.display = 'block');
    }
});
  
