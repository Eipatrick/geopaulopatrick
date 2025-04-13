<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geo Paulo Patrick</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        /* Estilos para o cabeçalho com imagem de fundo */
        header {
            position: relative;
            text-align: center;
            color: white;
            background-image: url('Terra.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-blend-mode: overlay;
            background-color: rgba(0, 0, 0, 0.5);
        }

        header h1, header p {
            position: relative;
            z-index: 1;
        }

        #buttons {
            position: relative;
            z-index: 1;
            margin-top: 10px;
        }

        #buttons img {
            filter: brightness(1) invert(0);
            width: 30px;
            margin: 0 5px;
        }

        /* Painel de contato */
        .contact-panel {
            background-color: #f9f9f9;
            padding: 1rem;
            text-align: center;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .contact-form {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            color: #8c6b54;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label{
            width: 580px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #8c6b54;
            outline: none;
        }

        .form-group textarea {
            height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #4A3F35;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #3c322a;
        }

        /* Seção de perfil freelancer */
        .profile-section {
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }

        .profile-section h2 {
            font-size: 2rem;
            color: #8c6b54;
            margin-bottom: 20px;
        }

        .profile-card {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .profile-image img {
            max-width: 150px;
            border-radius: 50%;
            margin-right: 20px;
            margin-bottom: 10px;
            border: 2px solid #8c6b54;
        }

        .profile-info {
            flex: 1;
            text-align: left;
        }

        .profile-info p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        .btn-profile {
            display: block;
            background-color: #8c6b54;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin: 0 auto;
            text-align: center;
        }

        .btn-profile:hover {
            background-color: #7a5a46;
        }
    </style>
</head>
<body>
    <div id="ia-friendly">Feito com IA ♥</div>

    <header>
        <h1>Geo Paulo Patrick</h1>
        <p>Bem-vindo ao meu portfólio de geoprocessamento e sensoriamento remoto.</p>
        <p>&copy; Paulo Patrick Rodrigues da Silva</p>

<!-- Botões OpenStreetMap, LinkedIn, GitHub e Freelancer -->
<div id="buttons">
    <div class="osm-link">
        <a href="https://www.openstreetmap.org/user/eipatrick" target="_blank" rel="noopener noreferrer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Openstreetmap_logo.svg" alt="OpenStreetMap">
        </a>
    </div>

    <div class="linkedin-link">
        <a href="https://www.linkedin.com/in/paulo-patrick-rodrigues-da-silva-5a3791100/" target="_blank" rel="noopener noreferrer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn">
        </a>
    </div>

    <div class="github-link">
        <a href="https://github.com/Eipatrick/Portfolio_cartografia" target="_blank" rel="noopener noreferrer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" alt="GitHub">
        </a>
    </div>

    <div class="freelancer-link">
        <a href="https://www.br.freelancer.com/u/eipatrick" target="_blank" rel="noopener noreferrer">
            <img src="pngwing.com.png" alt="Freelancer.com">
        </a>
    </div>
</div>
    </header>

    <nav>
        <a href="index.html">Início</a>
        <a href="projetos.html">Projetos</a>
        <a href="artigos.html">Artigos</a>
        <a href="contato.php">Contato</a>
    </nav>

    <section id="freelancer-profile" class="profile-section">
        <div class="profile-image">
            <img src="marca_paulopatrick.png" alt="Freelancer">
        </div>
        <h2>Gostaria de trabalhar comigo?</h2>
        <div class="profile-card">
            <div class="profile-info">
                <p>
                    "Estou ingressando no mercado de geoprocessamento e sensoriamento remoto e, como freelancer, estou disponível para colaborar em projetos sem a obrigatoriedade da emissão de ART (Anotação de Responsabilidade Técnica), uma vez que estou construindo experiência e portfólio."
                </p>
                <a href="https://www.br.freelancer.com/u/eipatrick" target="_blank" rel="noopener noreferrer" class="btn-profile">
                    Perfil Freelancer
                </a>
            </div>
        </div>
    </section>

    <section class="contact-form">
    <h2>Formulário de contato</h2>
    <form class="form-label" action="enviar_email.php" method="POST">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="nome" required placeholder="Ex: Paulo Patrick">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required placeholder="exemplo@dominio.com">
        </div>
        <div class="form-group">
            <label for="subject">Assunto:</label>
            <input type="text" id="subject" name="assunto" required placeholder="Ex: Dúvida sobre seu portfólio">
        </div>
        <div class="form-group">
            <label for="message">Mensagem:</label>
            <textarea id="message" name="mensagem" required placeholder="Escreva sua mensagem aqui..."></textarea>
        </div>
        <button type="submit" class="submit-btn">Enviar Mensagem</button>
    </form>
</section>


    <?php if (isset($_SESSION['sucesso'])): ?>
        <div style="color: green; text-align:center;">✅  <?= $_SESSION['sucesso']; ?></div>
        <?php unset($_SESSION['sucesso']); ?>
    <?php elseif (isset($_SESSION['erro'])): ?>
        <div style="color: red; text-align:center;">❌ <?= $_SESSION['erro']; ?></div>
        <?php unset($_SESSION['erro']); ?>
    <?php endif; ?>

    <footer id="footer">
        <p>&copy; Paulo Patrick Rodrigues da Silva, 2025.</p>
        <p>
            Este portfólio é de código aberto sob a 
            <a href="license.md" target="_blank" class="license-link">licença GNU GPL v3</a>. 
            Você pode usar e compartilhar o conteúdo para fins não comerciais, desde que atribua os créditos adequadamente.
        </p>
        <div class="ai-credit">
            <p>Desenvolvido com a colaboração das IA's DeepSeek e ChatGPT.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
