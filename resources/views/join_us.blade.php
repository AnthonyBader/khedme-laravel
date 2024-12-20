<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">
    <title>Adem 3al Work</title>
    <link rel="stylesheet" href="{{ asset('Khedme/css/adem3lw.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <a href="{{ route('homePage') }}" class="logo">
                <img src="{{ asset('Khedme/Photos/Logo1.png') }}" alt="Khedme Logo">

            </a>
            <h1>Adem 3al Work</h1>
            {{-- <div class="profile-icon">
                <img src="../Photos/ProfileIcon.png" alt="Profile Icon">
            </div> --}}
        </div>

        <!-- Form Section -->
        <div class="form-wrapper">
            <div class="form-container">
                <!-- Profile Picture Upload -->
                <div class="profile-picture-wrapper">
                    <div class="profile-picture" id="profileDisplay">
                        <img src="" alt="Profile Picture Preview" id="profilePreview">
                    </div>
                    <label for="profile-picture" class="profile-label">Upload Profile Picture</label>
                    <input type="file" id="profile-picture" name="profile-picture" accept="image/png" class="profile-input" onchange="previewImage()">
                </div>

                <!-- User Input Form -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="first-name">FIRST NAME</label>
                        <input type="text" id="first-name" name="first-name" required>
                    </div>

                    <div class="form-group">
                        <label for="last-name">LAST NAME</label>
                        <input type="text" id="last-name" name="last-name" required>
                    </div>

                    <div class="form-group">
                        <label for="nationality">NATIONALITY</label>
                        <input type="text" id="nationality" name="nationality" required>
                    </div>

                    <div class="form-group">
                        <label for="type-of-work">TYPE OF WORK</label>
                        <input type="text" id="type-of-work" name="type-of-work" required>
                    </div>

                    <div class="form-group">
                        <label for="cv">CV</label>
                        <input type="file" id="cv" name="cv" accept=".pdf" required>
                    </div>

                    <div class="form-group">
                        <label for="passport">PASSPORT</label>
                        <input type="file" id="passport" name="passport" accept=".pdf" required>
                    </div>

                    <div class="form-group">
                        <label for="location">LOCATION</label>
                        <input type="text" id="location" name="location" required>
                    </div>

                    <div class="form-group">
                        <label for="years-experience">YEARS EXPERIENCE</label>
                        <input type="text" id="years-experience" name="years-experience" required>
                    </div>

                    <div class="form-group">
                        <label for="la-hokm">LA HOKM 3LAYH</label>
                        <input type="file" id="la-hokm" name="la-hokm" accept=".pdf" required>
                    </div>
                </div>

                <div class="submit-btn">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>2024 Khedme | All rights reserved</p>
    </footer>

    <!-- JavaScript for Image Preview -->
    <script>
        function previewImage() {
            const file = document.getElementById('profile-picture').files[0];
            const reader = new FileReader();

            reader.onloadend = function () {
                document.getElementById('profilePreview').src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                document.getElementById('profilePreview').src = "";
            }

            // Hide the filename display
            document.getElementById('profile-picture').style.display = 'none';
        }
    </script>
</body>
</html>
