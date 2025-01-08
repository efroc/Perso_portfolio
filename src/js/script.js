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