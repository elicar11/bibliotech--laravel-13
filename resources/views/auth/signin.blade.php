<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | BiblioTech</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth-style.css') }}">
</head>
<body>

    <div class="auth-container">
        <!-- Côté gauche : Formulaire -->
        <div class="auth-form-side">
            <div class="auth-header">
                <a href="index.html" class="auth-logo">
                    <i class="fas fa-book-open"></i> BiblioTech
                </a>
                <p class="auth-subtitle">Gérez votre savoir en toute simplicité.</p>
            </div>

            <div class="auth-form-wrapper">

                <form action="#" class="auth-form">
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" placeholder="Entrez votre email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">MOT DE PASSE</label>
                        <input type="password" id="password" placeholder="Entrez votre mot de passe" required>
                        <a href="#" class="forgot-link">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="btn btn--primary">Se connecter</button>
                </form>

                <p class="switch-auth">
                    Pas encore de compte ? <a href="{{ route('register') }}">S'inscrire gratuitement</a>
                </p>
            </div>
        </div>

        <!-- Côté droit : Marketing (Style Exercism) -->
        <div class="auth-info-side">
            <div class="info-content">
                <div class="illustration-grid">
                    <div class="avatar-circle"><i class="fas fa-user-graduate"></i></div>
                    <div class="avatar-circle large"><i class="fas fa-book-reader"></i></div>
                    <div class="avatar-circle"><i class="fas fa-user-tie"></i></div>
                    <div class="avatar-circle"><i class="fas fa-university"></i></div>
                    <div class="avatar-circle large"><i class="fas fa-laptop-code"></i></div>
                </div>

                <h2>Mini Bibliothèque est libre d'accès pour tous.</h2>
                <p>Améliorez votre organisation avec <span>1200+ ouvrages</span> classés dans <span>83 catégories</span>, et profitez du soutien de notre communauté de lecteurs passionnés.</p>
                <p class="info-highlight">L'application est 100% gratuite pour toujours.</p>

                <div class="trust-icons">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js"></i>
                    <i class="fas fa-database"></i>
                    <span class="more-tag">+48 autres</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
