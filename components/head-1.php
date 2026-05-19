<?php
include 'config.php';
$streams_query = "SELECT * FROM streams";
$streams_result = mysqli_query($conn, $streams_query);
?>

<section class="hero-container">
    <div class="hero-content">
        <h1 class="hero-title">aaaaaaa</h1>
        <p class="hero-subtitle">Smart matching for Baccalaureate students.</p>

        <div class="hero-form-box" id="hero-form-box">
            <form action="components/results.php" method="GET" class="hero-main-form" id="hero-main-form">
                
                <div class="hero-input-group">
                    <label class="hero-label">Desired Major</label>
                    <input type="text" name="major" placeholder="e.g. Engineering" class="hero-field">
                </div>

                <div class="hero-input-group">
                    <label class="hero-label">Sector</label>
                    <select name="sector" class="hero-field" id="sector-select" onchange="toggleGradeField()">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>

                <div class="hero-input-group">
                    <label class="hero-label">Bac Stream</label>
                    <select name="stream_id" class="hero-field">
                        <option value="">Select Stream</option>
                        <?php while($row = mysqli_fetch_assoc($streams_result)): ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="hero-input-group" id="grade-group">
                    <label class="hero-label">Expected Grade</label>
                    <input type="number" name="grade" step="0.01" placeholder="00.00" class="hero-field">
                </div>

                <button type="submit" class="hero-submit-btn">Find Institutions</button>
            </form>
        </div>
    </div>
</section>

<script>
    function toggleGradeField() {
        const sectorSelect = document.getElementById('sector-select');
        const gradeGroup = document.getElementById('grade-group');
        const formBox = document.getElementById('hero-form-box');
        const mainForm = document.getElementById('hero-main-form');
        
        if (sectorSelect.value === 'private') {
            gradeGroup.style.display = 'none';
            formBox.classList.add('compact-mode');
            mainForm.classList.add('compact-mode');
        } else {
            gradeGroup.style.display = 'flex';
            formBox.classList.remove('compact-mode');
            mainForm.classList.remove('compact-mode');
        }
    }
    
    // Initialize state on page load
    document.addEventListener('DOMContentLoaded', toggleGradeField);
</script>