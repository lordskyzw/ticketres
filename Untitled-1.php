<!DOCTYPE html>
<html>
  <head>
    <title>Job Application Page</title>
  </head>
  <body>
    <h1>Job Vacancies</h1>
    <ul>
      <li>Job Title 1</li>
      <li>Job Title 2</li>
      <li>Job Title 3</li>
      <!-- Add more job titles as needed -->
    </ul>
    
    <h2>Apply for a Job</h2>
    <form action="/submit-application" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br>
      
      <label for="resume">Resume:</label>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br>
      
      <label for="cover-letter">Cover Letter:</label>
      <textarea id="cover-letter" name="cover-letter" required></textarea><br>
      
      <label for="job-title">Job Title:</label>
      <select id="job-title" name="job-title" required>
        <option value="">--Select a job title--</option>
        <option value="job-title-1">Job Title 1</option>
        <option value="job-title-2">Job Title 2</option>
        <option value="job-title-3">Job Title 3</option>
        <!-- Add more job titles as needed -->
</body>
<html>