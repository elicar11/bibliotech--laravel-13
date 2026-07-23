<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire | BiblioTech</title>
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
                <p class="auth-subtitle">Commencez votre voyage littéraire aujourd'hui.</p>
            </div>

            <div class="auth-form-wrapper">

                <form action="/inscription_traitement" class="auth-form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">NOM COMPLET</label>
                        <input type="text" id="name" placeholder="RAKOTO Nomena" name="name" value="{{old('name')}}" required>
                        @error('name')
                        <span style="color: #ff4d4d; margin-bottom: 8px; text-align: center; font-size: 0.9rem;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" placeholder="votre@email.com" name="email" value="{{old('email')}}" required>
                        @error('email')
                        <span style="color: #ff4d4d; margin-bottom: 8px; text-align: center; font-size: 0.9rem;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">CRÉER UN MOT DE PASSE</label>
                        <input type="password" id="password" placeholder="8 caractères min." name="password" required>
                        @error('password')
                        <span style="color: #ff4d4d; margin-bottom: 8px; text-align: center; font-size: 0.9rem;">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">CONFIRMER VOTRE MOT DE PASSE</label>
                        <input type="password" id="password" placeholder="8 caractères min." name="password_confirmation" required>
                        @error('password')
                        <span style="color: #ff4d4d; margin-bottom: 8px; text-align: center; font-size: 0.9rem;">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="terms">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">J'accepte les <a href="#">conditions d'utilisation</a></label>
                    </div>

                    <button type="submit" class="btn btn--green-auth">Créer mon compte</button>
                </form>

                <p class="switch-auth">
                    Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a>
                </p>
            </div>
        </div>

        <!-- Côté droit : Marketing (Identique à Sign In pour la cohérence) -->
        <div class="auth-info-side">
            <div class="info-content">
                <div class="illustration-grid">
                    <div class="avatar-circle"><i class="fas fa-book"></i></div>
                    <div class="avatar-circle large"><i class="fas fa-pencil-alt"></i></div>
                    <div class="avatar-circle"><i class="fas fa-search"></i></div>
                    <div class="avatar-circle"><i class="fas fa-microchip"></i></div>
                    <div class="avatar-circle large"><i class="fas fa-brain"></i></div>
                </div>

                <h2>Rejoignez la plus grande bibliothèque numérique.</h2>
                <p>Maîtrisez votre temps de lecture et découvrez des <span>milliers de ressources</span> partagées par des experts du monde entier.</p>
                <p class="info-highlight">Plus de 10 000 lecteurs nous font confiance.</p>

                <div class="trust-icons">
                    <i class="fab fa-aws"></i>
                    <i class="fab fa-docker"></i>
                    <i class="fab fa-python"></i>
                    <i class="fab fa-node-js"></i>
                    <span class="more-tag">+24 technos</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
