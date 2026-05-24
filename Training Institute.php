<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Training Institute of Computer & IT</title>
<!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
.hero {
background-image: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://wallpaperaccess.com/full/2036081.jpg');
background-size: cover;
background-position: center;
color: white;
padding: 100px 20px;
text-align: center;
}
.hero h1 { font-size: 3rem; font-weight: bold; text-shadow: 2px 2px 5px rgba(0,0,0,0.5); }
.hero p { font-size: 1.2rem; margin-top: 10px; text-shadow: 1px 1px 3px rgba(0,0,0,0.4); }
.section-heading { text-align: center; margin-top: 50px; margin-bottom: 30px; }
.img-card { border-radius: 10px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1); transition: transform 0.3s; height: 100%; display: flex; flex-direction: column; }
.img-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }
.img-card img { width: 100%; height: 220px; object-fit: contain; background-color: #fff; padding: 10px; }
.gallery-header { text-align: center; padding: 40px 10px 20px; }
.gallery-img { width: 100%; height: 250px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-bottom: 20px; }
.footer { background-color: #222; color: #fff; padding: 40px 0; text-align: center; }
.footer a { color: #fff; margin: 0 10px; font-size: 1.5rem; }
.footer a:hover { color: #0d6efd; }

/* Only New Courses Height Fix */
.new-course .img-card { min-height: 100%; }
</style>
</head>
<body>
<!-- Header / Hero Section -->
<header class="hero">
<img src="SF.png" alt="Example" style="height:200px ; width:200px;">
<h1>SkillForge Institute</h1>
<p class="lead mt-3">Learn, Practice, and Build Your Tech Career with Us</p>
<a href="#courses" class="btn btn-success btn-lg mt-3"><i class="fas fa-book-open"></i> View Courses</a>
</header>
<div class="text-center my-5">
<p>Click Here
<a href="student_form.php" class="btn btn-success btn-lg" target="_blank">Register Now</a>
Fill-UP This "Registration Form" for Joining Our Institiute.</p>
</div>
<div class="container">
<h2 class="gallery-header">Our Institute Gallery</h2>
<div class="row">
<div class="col-md-4"><img src="https://i.pinimg.com/736x/4c/c1/d4/4cc1d40b43851cf0323e628441bf1b15.jpg" class="gallery-img" alt="Lab"></div>
<div class="col-md-4"><img src="https://i.pinimg.com/736x/52/51/43/525143cf9f272ce9af741a674e4f4844.jpg" class="gallery-img" alt="Students"></div>
<div class="col-md-4"><img src="https://i.pinimg.com/736x/74/2a/c8/742ac873eaf672e6805c8514397a1ebd.jpg" class="gallery-img" alt="Classroom"></div>
</div>
<div class="row">
<div class="col-md-4"><img src="https://i.pinimg.com/736x/0e/c3/4f/0ec34ffaee3865cbc913734efebf59c9.jpg" class="gallery-img" alt="Awards"></div>
<div class="col-md-4"><img src="https://i.pinimg.com/736x/8b/78/91/8b789117227191641fbbb00e706ad135.jpg" class="gallery-img" alt="Events"></div>
<div class="col-md-4"><img src="https://i.pinimg.com/736x/32/5a/72/325a72bb3458821868fc67a1d0340eba.jpg" class="gallery-img" alt="Celebration"></div>
</div>
</div>
<!-- Course Info Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="courseTitle">Course Title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body text-center">
<img id="courseImage" src="" alt="Course Logo" class="mb-3" style="height:100px">
<p id="courseDescription"></p>
</div>
</div>
</div>
</div>
<section id="about" class="container py-5">
<h2 class="section-heading">About Us</h2>
<p class="text-center">We are a leading institute in Computer & IT education, offering top-class training in programming, web development, software tools, and career-oriented skills. With practical learning and professional mentors, we help you shape a better future in tech.</p>
</section>
<section id="courses" class="container py-5">
<h2 class="section-heading">Our Popular Courses</h2>
<div class="row g-4" id="coursesContainer"></div>
</section>
<footer class="footer" style="background-color:black;">
<div class="container"><center><b>
<p>Follow Us</p>
<a href="https://www.instagram.com/mh_yashwardhan/#/" target="_blank"><i class="fab fa-instagram"></i></a>
<br>
<a href="http://www.youtube.com/@mhYashwardhan/" target="_blank"><i class="fab fa-youtube"></i></a>
<br>
<a href="https://www.google.com/maps/place/Kalyan,+Maharashtra" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
<br>
<p class="mt-3">© 2025 Training Institute of Computer & IT BY SkillForge</p></b></center>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
function showCourse(title, description, imageUrl) {
document.getElementById('courseTitle').innerText = title;
document.getElementById('courseDescription').innerText = description;
document.getElementById('courseImage').src = imageUrl;
var myModal = new bootstrap.Modal(document.getElementById('courseModal'));
myModal.show();
}

const courses = [
  { title: 'HTML & CSS', description: 'Learn to build beautiful and responsive websites from scratch.', image: 'https://i.pinimg.com/736x/6a/62/bc/6a62bcde3cd0c3740460f411cc066427.jpg' },
  { title: 'JavaScript & jQuery', description: 'Make your websites interactive using JavaScript and jQuery.', image: 'https://i.pinimg.com/736x/f7/ef/62/f7ef626a6dbd582e8680b777c9f0a916.jpg' },
  { title: 'C/C++', description: 'Creativity using object-oriented programming with C/C++.', image: 'https://i.pinimg.com/736x/64/c9/f3/64c9f35344f43c46f6120d48ba2e684c.jpg' },
  { title: 'CCC', description: 'Essential digital literacy course for all government job aspirants.', image: 'https://i.pinimg.com/736x/bf/d1/9b/bfd19b5fe5c83d1c8acad9d078de340e.jpg' },
  { title: 'Advanced Excel', description: 'Master formulas, dashboards, and data analysis in Excel.', image: 'https://i.pinimg.com/1200x/19/92/91/1992917f382f70752f1327c6f10e0a7a.jpg' },
  { title: 'Python', description: 'Versatile language for data science, automation, and apps.', image: 'https://i.pinimg.com/736x/dd/86/e1/dd86e167a140b312fff9f1a86ae2762e.jpg' },
  { title: 'Cyber Security', description: 'Learn how to protect networks, systems, and data.', image: 'https://i.pinimg.com/736x/4b/2f/0d/4b2f0d22d18cab030f82e946d4fde8bd.jpg' },
  { title: 'Photo Editing', description: 'Enhance images using Photoshop and other tools.', image: 'https://i.pinimg.com/736x/c6/cb/46/c6cb46e898757fd90857826455e3785f.jpg' },
  { title: 'Video Editing', description: 'Create professional videos using Premiere Pro, Filmora, etc.', image: 'https://i.pinimg.com/736x/85/b5/95/85b59552cf7e898318a463a0bd175936.jpg' },
  { title: 'Computer Typing', description: 'Master Fast Typing, Unlock Your Potential.', image: 'https://i.pinimg.com/736x/68/fb/89/68fb898c91e458cb4b0981d946b3d095.jpg' },
  { title: 'Data Entry', description: 'Gain accuracy and speed for professional data entry jobs.', image: 'https://i.pinimg.com/736x/98/b9/6c/98b96c47f5a84f35e5a24fcee9852add.jpg', isNew: true },
  { title: 'Data Analytics', description: 'Learn to analyze and visualize data for smart decision making.', image: 'https://cdn-icons-png.flaticon.com/512/1055/1055672.png', isNew: true }
];

const container = document.getElementById('coursesContainer');
courses.forEach(course => {
const col = document.createElement('div');
col.className = 'col-md-4' + (course.isNew ? ' new-course' : '');
col.innerHTML = `
<div class="img-card">
<img src="${course.image}" alt="${course.title}" />
<div class="p-3">
<h5>${course.title}</h5>
<p>${course.description}</p>
<button class="btn btn-primary" onclick="showCourse('${course.title}', '${course.description}', '${course.image}')">View Course</button>
</div>
</div>
`;
container.appendChild(col);
});
</script>
</body>
</html>
