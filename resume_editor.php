<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>

    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Main Section -->
    <main class="container my-5">
        <h1 class="text-center mb-4">Edit Your Resume</h1>

        <!-- Responsive Layout -->
        <div class="row">
            <!-- Form Section -->
            <div class="col-md-6 mb-5">
                <form id="resumeForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" id="title" name="title" class="form-control"
                            placeholder="Enter your title (e.g., Software Engineer)">
                    </div>
                    <div class="form-group">
                        <label for="summary">Summary</label>
                        <textarea id="summary" name="summary" class="form-control" rows="4"
                            placeholder="Write a brief professional summary"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="skills">Skills</label>
                        <input type="text" id="skills" name="skills" class="form-control"
                            placeholder="List your skills (comma-separated)">
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience</label>
                        <div id="experienceEditor" class="form-control" style="height: 150px;"></div>
                    </div>
                    <div class="form-group">
                        <label for="project">Projects</label>
                        <div id="projectEditor" class="form-control" style="height: 150px;"></div>
                    </div>
                    <div class="form-group">
                        <label for="education">Education</label>
                        <div id="educationEditor" class="form-control" style="height: 150px;"></div>
                    </div>
                </form>
            </div>

            <!-- Live Preview Section -->
            <div class="col-md-6 mb-5" style="max-height: 297mm !important;">
                <h2 class="text-center">Live Preview</h2>
                <div id="resumePreview" class="p-3 border rounded bg-light">
                    <h3 id="previewName" class="text-center">Dristanta Silwal</h3>
                    <h5 id="previewTitle" class="text-center">Software Developer Intern</h5>
                    <p id="previewSummary">Passionate about creating something that would be usefule for the world.</p>
                    <hr>
                    <h6>Skills</h6>
                    <p id="previewSkills">HTML, CSS, JS, PHP, Python, GIT, GitHub, Heroku, Azure, AWS</p>
                    <h6>Projects</h6>
                    <div id="previewProject">
                        Personal Portfolio
                        <ol>
                            <li>Developed a personal portfolio using HTML, CSS, and JavaScript</li>
                            <li>Hosted the portfolio on GitHub Pages</li>
                        </ol>
                        Online Resume Builder
                        <ol>
                            <li>Developed an online resume builder using PHP and MySQL</li>
                            <li>Deployed the application on Heroku</li>
                        </ol>
                        Wordle Game
                        <ol>
                            <li>Developed a Wordle game using Python and Pygame</li>
                            <li>Published the game on PyPI</li>
                        </ol>
                        Star Wars API
                        <ol>
                            <li>Developed a Star Wars API using Node.js and Express.js</li>
                            <li>Deployed the API on Heroku</li>
                            <li>Used by 100 people</li>
                    </div>
                    <h6>Experience</h6>
                    <div id="previewExperience" style="margin: 0 !important; padding: 0;">
                        Software Developer Intern | Google
                        <ol>
                            <li>Developed a web application using React.js and Node.js</li>
                            <li>Implemented a RESTful API for the application</li>
                            <li>Deployed the application on Heroku</li>
                        </ol>
                        Software Developer Intern | Amazon
                        <ol>
                            <li>Developed a web application using Angular and Express.js</li>
                            <li>Implemented a RESTful API for the application</li>
                            <li>Deployed the application on AWS</li>
                        </ol>
                        Software Developer Intern | Microsoft
                        <ol>
                            <li>Developed a web application using Vue.js and Django</li>
                            <li>Implemented a RESTful API for the application</li>
                            <li>Deployed the application on Azure</li>
                    </div>
                    <h6>Education</h6>
                    <div id="previewEducation">University of Idaho</div>
                </div>
            </div>
        </div>

        <!-- Download Button -->
        <section class="text-center">
            <button id="downloadResume" class="btn btn-primary">Download Your Resume</button>
        </section>
    </main>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <!-- Include Quill.js -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>

    <!-- Scripts -->
    <script>
        // Initialize Quill.js editors for Experience and Education
        const experienceEditor = new Quill('#experienceEditor', {
            theme: 'snow',
            placeholder: '   Describe your professional experience...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        // Initialize Quill.js editors for Projects
        const projectEditor = new Quill('#projectEditor', {
            theme: 'snow',
            placeholder: '   Describe your professional experience...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        const educationEditor = new Quill('#educationEditor', {
            theme: 'snow',
            placeholder: '   List your educational background...',
            modules: {
                toolbar: [
                    [{ 'header': [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    ['clean']
                ]
            }
        });

        // Update Live Preview dynamically
        document.getElementById('name').addEventListener('input', function () {
            document.getElementById('previewName').innerText = this.value || '[Your Name]';
        });
        document.getElementById('title').addEventListener('input', function () {
            document.getElementById('previewTitle').innerText = this.value || '[Your Title]';
        });
        document.getElementById('summary').addEventListener('input', function () {
            document.getElementById('previewSummary').innerText = this.value || '[Your Summary]';
        });
        document.getElementById('skills').addEventListener('input', function () {
            document.getElementById('previewSkills').innerText = this.value || '[Your Skills]';
        });

        // Update Projects in the Live Preview
        projectEditor.on('text-change', function () {
            document.getElementById('previewProject').innerHTML = projectEditor.root.innerHTML;
        });

        // Update Experience and Education in the Live Preview
        experienceEditor.on('text-change', function () {
            document.getElementById('previewExperience').innerHTML = experienceEditor.root.innerHTML;
        });
        educationEditor.on('text-change', function () {
            document.getElementById('previewEducation').innerHTML = educationEditor.root.innerHTML;
        });

        // Trigger HTML2PDF on clicking the download button
        document.getElementById('downloadResume').addEventListener('click', function () {
            const fullName = document.getElementById('name').value || 'custom';
            const firstName = fullName.split(' ')[0] || '_resume';

            const resumePreview = document.getElementById('resumePreview');
            const options = {
                margin: 0,
                filename: `${firstName}_resume.pdf`,
                image: { type: 'jpeg', quality: 1.0 },
                html2canvas: { scale: 2, useCORS: true },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait', margin: 0 },
                pagebreak: { mode: ['css', 'avoid-all'] }
            };
            html2pdf().set(options).from(resumePreview).save();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</body>

</html>