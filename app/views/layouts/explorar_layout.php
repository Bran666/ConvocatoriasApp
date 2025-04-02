<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENA - Explorar Oportunidades</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .search-bar {
            border-radius: 20px;
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
        }
        
        .nav-tabs .nav-link.active {
            color: #198754;
            border-bottom: 2px solid #198754;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: transparent;
        }
        
        .nav-tabs .nav-link {
            color: #6c757d;
            border: none;
        }
        
        .category-pills .btn {
            border-radius: 20px;
            margin-right: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }
        
        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .card-info-icon {
            color: #198754;
        }
        
        .badge-destacado {
            display: inline-block;
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        .bookmark-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            color: #6c757d;
        }
        
        .bookmark-btn:hover {
            background-color: white;
            color: #198754;
        }
        
        .filter-section {
            background-color: rgba(248, 249, 250, 0.5);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <?php include_once $content; ?>

 
<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>