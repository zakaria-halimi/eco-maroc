<?php
// 1. Connexion m3a DB (khassna nerj3o lor bach nl9aw config.php)
include 'config.php'; 

// 2. Ched l-data mn l-URL
$major = isset($_GET['major']) ? mysqli_real_escape_string($conn, $_GET['major']) : '';
$stream_id = isset($_GET['stream_id']) ? $_GET['stream_id'] : '';
$grade = isset($_GET['grade']) && $_GET['grade'] != '' ? $_GET['grade'] : 0;

// 3. Query SQL m9ada
$sql = "SELECT institutions.*, streams.name as stream_name 
        FROM institutions 
        LEFT JOIN streams ON institutions.stream_id = streams.id
        WHERE 1=1";

if(!empty($major)) { $sql .= " AND institutions.major LIKE '%$major%'"; }
if(!empty($stream_id)) { $sql .= " AND institutions.stream_id = '$stream_id'"; }
if($grade > 0) { $sql .= " AND institutions.min_grade <= '$grade'"; }

$results = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - EduMaroc</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../style.css">
    
    <style>
        .results-section-wrapper { padding: 40px 0; }
        .results-institution-card { 
            background: #fff; 
            border-radius: 15px; 
            transition: 0.3s; 
            border: 1px solid #eee;
        }
        .results-institution-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important; 
        }
        .badge-city { background: #f0f9ff; color: #075985; font-weight: 600; }
    </style>
</head>
<body style="background-color: #f8fafc;">

    <?php include 'navbar.php'; ?>

    <div class="container results-section-wrapper">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Recommended Institutions</h2>
            <a href="../index.php" class="btn btn-outline-secondary btn-sm">New Search</a>
        </div>
        
        <div class="row">
            <?php if(mysqli_num_rows($results) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($results)): ?>
                    
                    <div class="col-md-4 mb-4">
                        <div class="results-institution-card shadow-sm p-4 h-100 d-flex flex-column">
                            <div class="mb-auto">
                                <span class="badge badge-city mb-2"><?php echo htmlspecialchars($row['city']); ?></span>
                                <h4 class="fw-bold mb-3" style="color: #0f172a;"><?php echo htmlspecialchars($row['name']); ?></h4>
                                
                                <div class="mb-2">
                                    <small class="text-muted d-block">Major</small>
                                    <span class="fw-semibold">🎓 <?php echo htmlspecialchars($row['major']); ?></span>
                                </div>
                                
                                <div class="mb-2">
                                    <small class="text-muted d-block">Bac Stream</small>
                                    <span class="fw-semibold">📚 <?php echo htmlspecialchars($row['stream_name']); ?></span>
                                </div>

                                <div class="mb-3">
                                    <small class="text-muted d-block">Minimum Grade Required</small>
                                    <span class="text-primary fw-bold" style="font-size: 1.1rem;">⭐ <?php echo number_format($row['min_grade'], 2); ?></span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="#" class="btn btn-primary w-100 py-2 rounded-3" style="background-color: #075985; border: none;">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center py-5">
                    <div class="mb-4" style="font-size: 4rem;">🔍</div>
                    <h3 class="fw-bold">No matching institutions found</h3>
                    <p class="text-muted">Try lowering your grade or searching for a broader major.</p>
                    <a href="../index.php" class="btn btn-primary mt-3" style="background-color: #075985;">Modify Search</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>