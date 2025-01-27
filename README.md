# Student-Registration-Form-Using-PHP
This project provides a web-based application form. Built using HTML, CSS (Bootstrap), and JavaScript, it includes sections for personal details, educational background, and course selection.

# How to execute the code 

*  Copy the given code to the notepad and save it has ".php".
*  Install " XAMPP Control Pane" from chrome :The XAMPP Control Panel is a crucial part of the XAMPP package because it provides a user-friendly interface to manage the various components that make up a local       web development environment.
*  cut and copy the notepad code to the C: drive where xampp is installed "C:\xampp\htdocs" [paste the code in htdocs]
*  Next open the XAMPP Control Panel and Click on "Start" button where the Module is "Apache" server.
*  Open the chrome and type in site/url "localhost/database.php". [ database.php is the code/notepad given name ]
 
# Student Registration Form 

This is a student registration form built with HTML, Bootstrap, and JavaScript.

## Structure

The form is structured using HTML elements, styled with Bootstrap CSS, and includes JavaScript for dynamic behavior.

### HTML

*   Uses `<!DOCTYPE html>` for HTML5 declaration.
*   Includes `<head>` with meta information (charset, viewport, title) and links to Bootstrap CSS and JavaScript libraries (jQuery, Popper.js, Bootstrap JS).
*   The `<body>` contains the form content.

### Bootstrap

*   Utilizes Bootstrap classes for layout (`container`, `row`, `col-*`), form elements (`form-group`, `form-control`, `form-check`, `btn`), and styling.
*   Uses Bootstrap 4.6.2.

### CSS

*   Embedded `<style>` block for custom styling:
    *   Background image (`background-image: url("bg.jpg");`).
    *   Text color (`color: wheat;`).
    *   Logo styling (`.log`).
    *   Form container styling (`.form-container`).
    *   Section title styling (`.section-title`).

### JavaScript

*   Includes a `toggleSection(section, show)` function to dynamically show/hide form sections based on user input.
*   Specifically handles showing the "Bus Address" section when "Bus Required" is "Yes" and hiding the hostel section when the bus is selected and vice versa.

## Form Sections

The form is divided into the following sections:

### 1. Header

*   Includes the institute logo (`/logo.jpg`) and name ("PES Institute Of Advance Management Studies, Shimogga").
*   A "Student Registration Form" title.

### 2. Personal Details

*   Name (`name`)
*   Father's Name (`father_name`)
*   Mother's Name (`mother_name`)
*   Date of Birth (`date_of_birth`)
*   Email (`email`)
*   Phone Number (`phone_number`)
*   Parent's Phone Number (`parent_phone_number`)
*   Gender (`gender` - select dropdown)
*   Nationality (`nationality`)
*   Religion (`religion`)
*   Caste (`caste`)
*   Address (`address` - textarea)

### 3. Education Details

*   **10th Details:**
    *   School Name (`10th_school_name`)
    *   Year of Passing (`10th_year_of_passing`)
    *   Obtained Percentage (`10th_percentage` - number input)
    *   Upload 10th Marks Card (`10th_marks_card_upload` - file input)
*   **12th Details:**
    *   College Name (`12th_college_name`)
    *   Branch (`branch` - radio buttons: Science, Commerce, Arts)
    *   Obtained Percentage (`12th_percentage` - number input)
    *   Upload 12th Marks Card (`12th_marks_card_upload` - file input)

### 4. Course Selection

*   Select Course (`course` - select dropdown: BCA, BCom, BBA, BSc CS)
*   Bus Required (`bus` - radio buttons: Yes/No, triggers `toggleSection`)
*   Hostel Required (`hostel` - radio buttons: Yes/No, triggers `toggleSection`)
*   Bus Address (`bus_address` - textarea, conditionally shown/hidden based on "Bus Required")

### 5. Submission

*   A "Register" button (`<button type="submit">`).

## Dynamic Behavior (JavaScript)

The `toggleSection` function handles the following logic:

*   If "Bus Required" is "Yes":
    *   Shows the "Bus Address" section.
    *   Hides the hostel section.
*   If "Hostel Required" is "Yes":
    *   Hides the "Bus address" section.
    *   Shows the hostel section.

## Key Improvements and Potential Issues

*   **Input Validation:** The form lacks input validation (e.g., required fields, email format validation, phone number format). This should be added for better data integrity.
*   **Form Submission Handling:** The form has a submit button but lacks a form action or JavaScript code to handle the submission. This needs to be implemented.
*   **Accessibility:** Consider adding ARIA attributes for better accessibility.
*   **Security:** Ensure proper security measures are in place to prevent vulnerabilities like cross-site scripting (XSS) and SQL injection.
*   **File Upload Handling:** The file upload fields only allow the user to select files. Server-side code is required to handle the actual file uploads.
*   **Conditional Hostel Section:** There is no hostel section defined in the HTML. The javascript logic references a hostel section that doesn't exist.

This markdown provides a comprehensive overview of the provided HTML code.

## -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

## HTML Structure

The HTML structure defines the basic building blocks of the web page. Here's a breakdown of how it's used in this student registration form:

1. **DOCTYPE Declaration:**
   - The code starts with `<!DOCTYPE html>` which specifies that the document type is HTML.

2. **HTML Tags:**
   - The core structure is defined using tags like `<html>`, `<head>`, and `<body>`.
     - `<html>`: The root element of the HTML document.
     - `<head>`: Contains meta information about the document (title, character encoding, viewport configuration, etc.).
     - `<body>`: Contains the visible content of the web page, including the form itself.

3. **Head Section:**
   - The `<head>` section provides metadata about the document:
     - Character encoding (e.g., UTF-8) ensures proper display of characters.
     - Viewport configuration optimizes the page layout for different devices.
     - Title (e.g., "Admission Form") is displayed on the browser tab.

4. **Body Section:**
   - The `<body>` section contains the content that users see on the web page. In this case, it includes the student registration form.

## Bootstrap Integration

Bootstrap is a popular CSS framework that simplifies web development by providing pre-defined styles and components. This form leverages Bootstrap for:

1. **CSS Library:**
   - A `<link>` tag references Bootstrap's CSS library (`https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css`). This library includes pre-defined styles for various HTML elements like buttons, forms, and grids.

2. **JavaScript Libraries:**
   - Two `<script>` tags reference required JavaScript libraries:
     - jQuery (`https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js`): Enables manipulation of the DOM and event handling.
     - Popper.js (`https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js`): Provides positioning functionality for components like tooltips and popovers (used by Bootstrap).

## Custom CSS Styles

While Bootstrap offers pre-defined styles, the form includes a custom `<style>` block to define specific styles for:

- Background image (`background-image: url("bg.jpg");`)
- Text color (`color: wheat;`)
- Form container styling (`.form-container` class)
- Section title styling (`.section-title` class)

These custom styles personalize the appearance of the form beyond Bootstrap's defaults.

## Form Design

The student registration form itself is created using an HTML `<form>` element. This element serves as a container for all the form fields and controls. Here's a breakdown of the form's design:

1. **Form Fields:**
   - The form includes various input fields to capture user information:
     - Text inputs for name, email, phone number, etc.
     - Radio buttons for selecting options like gender, bus required, etc.
     - Select boxes for choosing courses.
     - File upload field for uploading marks cards.

2. **Sections:**
   - The form is divided into logical sections using `<h3>` tags with the class `section-title`. These sections group related form fields (e.g., personal details, education details, course selection).

## JavaScript for Dynamic Behavior

A JavaScript `<script>` block is included to define a function called `toggleSection`. This function adds interactivity to the form:

1. **Conditional Visibility:**
   - The `toggleSection` function dynamically shows or hides the "Bus Address" section based on the user's selection for "Bus Required".
   - If "Bus Required" is selected, the "Bus Address" section is shown, and the "Hostel" section is hidden (and vice versa).

This JavaScript functionality enhances the user experience by making the form responsive to user input.

In summary, the provided HTML code effectively combines HTML structure, Bootstrap integration, custom CSS styles, and JavaScript for dynamic behavior to create a well-formatted and interactive student registration form.
