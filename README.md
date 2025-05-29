DevSync Software

DevSync es una plataforma de comunicación colaborativa tipo Slack, diseñada especialmente para equipos de desarrollo de software. A diferencia de otras soluciones, DevSync integra potentes herramientas propias para documentar, modelar y gestionar proyectos de software de forma ágil, todo desde una sola interfaz.

Además de mensajería en tiempo real, DevSync cuenta con un completo sistema de documentación técnica, creación de diagramas UML y de bases de datos, y soporte para metodologías ágiles, enfocado en la colaboración de equipos técnicos.
🧩 Características principales
📡 Mensajería instantánea

    Comunicación fluida entre miembros del equipo.

    Canales por proyecto, mensajes directos y notificaciones inteligentes.

🛠️ Herramientas propias para documentación técnica

    Editor nativo para creación y gestión de documentación técnica.

    Sistema de diagramación propio para:

        Diagramas UML: clases, secuencia, estados, casos de uso, etc.

        Diagramas de bases de datos en tiempo real mientras se crean las tablas.

    Plantillas integradas para reportes y especificaciones de software.

⚙️ Soporte para metodologías ágiles

    Gestión de tareas, backlog y sprints.

    Visualización tipo tablero Kanban.

    Asignación de responsables y seguimiento de avances.

🧑‍💼 Gestión de usuarios y permisos

    Roles personalizables: administrador, desarrollador, líder de proyecto, etc.

    Control de acceso por módulos y proyectos.

💻 Interfaz Web y Desktop

    Interfaz moderna basada en PHP Native con Blade templating.

    Pensado para escritorio con posibilidad de empaquetado tipo Electron.

🔌 Extensible y modular

    Arquitectura limpia y escalable.

    Listo para integrar herramientas externas (CI/CD, Git, etc.).

🧱 Estructura del proyecto

⚙️ Requisitos

    PHP >= 8.1

    Composer

    Node.js y NPM (para herramientas de escritorio o frontend adicional)

    Laravel >= 12

    Extensiones PHP: openssl, pdo, mbstring, tokenizer, xml, ctype, json

🚀 Instalación

# Clona el repositorio

git clone https://github.com/Englis666/ChatPlus.git
cd chatplus/backend

# Instala las dependencias PHP

composer install

# Copia el archivo de entorno y genera clave

cp .env.example .env
php artisan key:generate

# Ejecuta migraciones y seeders

php artisan migrate --seed

# Inicia el servidor1

php artisan:native serve

🧪 Uso

🔮 Futuras mejoras

    Chat en tiempo real con WebSockets.

    Generador visual de base de datos enlazado con migraciones reales.

    Exportación de documentación técnica a PDF o Markdown.

    Integración con servicios como GitHub, GitLab, Notion, etc.

👥 Contribuciones

¡Las contribuciones son bienvenidas!

    Reporta errores mediante Issues.

    Envía Pull Requests con mejoras o nuevas funcionalidades.

    Propón ideas para nuevas herramientas en la plataforma.

🧠 Licencia

Este proyecto está bajo la Licencia MIT.
