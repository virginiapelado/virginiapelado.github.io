function showSection(country) {
 
    var sections = document.getElementsByClassName('section');
    for (var i = 0; i < sections.length; i++) {
      sections[i].style.display = 'none';
    }
  
    var sectionId = 'section-' + country;
    var section = document.getElementById(sectionId);
    if (section) {
      section.style.display = 'block';
    }
  }
  