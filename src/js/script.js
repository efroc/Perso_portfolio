function showContent(section) {
    const content = document.getElementById('content');
    if(section === 'accueil') {
        content.innerHTML = `
            <p>accueil</p>
        `;
    } else if(section === 'competences') {
        content.innerHTML = `
            <p>competences</p>
        `;
    } else if(section === 'projets') {
        content.innerHTML = `
            <p>projets</p>
        `;
    } else {
        content.innerHTML = `
            <p>contact</p>
        `;
    }
}