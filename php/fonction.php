<?php
    session_start();
    require_once 'config.php';

    if (isset($_POST['login'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];

        // Vérifier que les champs ne sont pas vides
        if (!empty($email) && !empty($password)) {
            $query = $pdo->prepare("SELECT * FROM utilisateurs WHERE mail = ?");
            $query->execute([$email]);
            $user = $query->fetch();

            if ($user && password_verify($password, $user['mot_de_passe'])) {
                $_SESSION['user_id'] = $user['mail'];
                header("Location: ../src/home.html");
                exit();
            } else {
                echo "Identifiants invalides.";
            }
        } else {
            echo "Veuillez remplir tous les champs.";
        }
    }


    function recuperer_offres() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM offres ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';
        if ($action === 'ajouter') {
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $stmt = $conn->prepare("INSERT INTO offres (titre, description) VALUES (?, ?)");
            $stmt->execute([$titre, $description]);
        } elseif ($action === 'modifier') {
            $id = $_POST['id'];
            $titre = $_POST['titre'];
            $description = $_POST['description'];
            $stmt = $conn->prepare("UPDATE offres SET titre = ?, description = ? WHERE id = ?");
            $stmt->execute([$titre, $description, $id]);
        } elseif ($action === 'supprimer') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM offres WHERE id = ?");
            $stmt->execute([$id]);
        }

        header("Location: ../src/home.html");
        exit;
    }

switch ($_GET['action'] ?? '') {
    case 'get_offres':
        $stmt = $pdo->query("SELECT * FROM offres");
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        break;

    case 'add_offre':
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare("INSERT INTO offres (titre, description) VALUES (?, ?)");
        $stmt->execute([$data['titre'], $data['description']]);
        echo json_encode(['success' => true]);
        break;

    case 'delete_offre':
        $id = $_GET['id'] ?? 0;
        $stmt = $pdo->prepare("DELETE FROM offres WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['success' => true]);
        break;

    case 'update_offre':
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $pdo->prepare("UPDATE offres SET titre = ?, description = ? WHERE id = ?");
        $stmt->execute([$data['titre'], $data['description'], $data['id']]);
        echo json_encode(['success' => true]);
        break;

    default:
        echo json_encode(['error' => 'Action non reconnue']);
}


?>


