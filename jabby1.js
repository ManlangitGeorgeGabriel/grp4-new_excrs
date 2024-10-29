async function fetchSkills() {
    const apiUrl = 'http://localhost/new_project_grp4/jabby.php'; // Replace with your actual API URL
    try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const skills = await response.json();
        displaySkills(skills);
    } catch (error) {
        console.error('Error fetching skills:', error);
    }
}

function displaySkills(skills) {
    const skillsContainer = document.getElementById('skills-container');
    skills.forEach(skill => {
        const skillCircle = document.createElement('div');
        skillCircle.className = 'skill-circle';
        skillCircle.setAttribute('data-percent', skill.percent);
        skillCircle.style.setProperty('--clr', skill.color);
        
        const skillName = document.createElement('div');
        skillName.className = 'skill-name';
        skillName.textContent = skill.name;

        skillCircle.appendChild(skillName);
        skillsContainer.appendChild(skillCircle);
    });
}

document.addEventListener('DOMContentLoaded', fetchSkills);