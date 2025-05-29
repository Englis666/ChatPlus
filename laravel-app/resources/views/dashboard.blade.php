<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSync Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @stack('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="container-fluid">
    <div class="row">
       @include('components.sidebar')
        <main class="col-md-10 ms-sm-auto main-content">
            <div class="header-section">
                <h2>Dashboard Overview</h2> </div>

            @include('components.cards.summary')

            <div class="chart-container mb-5">
                <h5 class="mb-4 fw-semibold text-dark">Rendimiento Semanal de Tareas Completadas</h5>
                <canvas id="tasksChart"></canvas>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="activity-card">
                        <h5 class="mb-4 fw-semibold text-dark">Actividades Recientes del Sistema</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="ri-file-edit-line activity-icon"></i>
                                <span><strong>Nuevo Ticket Creado:</strong> "Error en Módulo de Pagos"</span>
                                <small>Justo ahora</small>
                            </li>
                            <li class="list-group-item">
                                <i class="ri-refresh-line activity-icon"></i>
                                <span><strong>Reinicio del Sistema:</strong> Mantenimiento programado</span>
                                <small>14 min</small>
                            </li>
                            <li class="list-group-item">
                                <i class="ri-fire-line activity-icon"></i>
                                <span><strong>Alerta Crítica:</strong> Servidor Principal Offline</span>
                                <small>2 horas</small>
                            </li>
                            <li class="list-group-item">
                                <i class="ri-sleep-line activity-icon"></i>
                                <span><strong>Apagado del Sistema:</strong> Fin de jornada</span>
                                <small>1 día</small>
                            </li>
                            <li class="list-group-item">
                                <i class="ri-database-line activity-icon"></i>
                                <span><strong>Uso DB:</strong> Base de datos al 80% de capacidad</span>
                                <small>1 día</small>
                            </li>
                            <li class="list-group-item">
                                <i class="ri-notification-3-line activity-icon"></i>
                                <span><strong>Nuevas Alertas:</strong> 13 eventos de seguridad</span>
                                <small>2 días</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ticket-card">
                        <h5 class="mb-4 fw-semibold text-dark">Tickets Abiertos Recientemente</h5>
                        <div class="ticket-item">
                            <div class="ticket-header">
                                <strong>Cristian Bilney</strong> <small>hace 2 días</small>
                            </div>
                            <span class="badge bg-secondary mb-2"><i class="ri-flag-line me-1"></i> Prioridad Baja</span>
                            <p class="text-muted">"No puedo acceder a la función de reportes de ventas mensuales. El botón..."</p>
                        </div>
                        <div class="ticket-item">
                            <div class="ticket-header">
                                <strong>Hady Vanetti</strong> <small>hace 4 días</small>
                            </div>
                            <span class="badge bg-danger mb-2"><i class="ri-error-warning-line me-1"></i> Crítico</span>
                            <p class="text-muted">"La aplicación móvil se cierra inesperadamente al intentar cargar el perfil de usuario. Afecta a todos..."</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <h5 class="mb-4 fw-semibold text-dark">Proyectos Activos de la Empresa</h5>
                <div class="col-md-4">
                    <div class="project-card">
                        <i class="ri-rocket-line project-icon"></i>
                        <span>Proyecto Aurora (Fase 2)</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <i class="ri-tools-line project-icon"></i>
                        <span>Proyecto Quantum (Desarrollo)</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="project-card">
                        <i class="ri-lightbulb-line project-icon"></i>
                        <span>Proyecto Nexus (Idea y Planificación)</span>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="view-all-link">
                        Ver todos los proyectos <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Smooth number animation for summary cards
    const animateNumbers = () => {
        document.querySelectorAll('.animate-number').forEach(element => {
            const target = parseInt(element.getAttribute('data-target'));
            let current = 0;
            const duration = 1500; // milliseconds
            const start = performance.now();

            const updateCount = (timestamp) => {
                const progress = (timestamp - start) / duration;
                current = Math.min(target, Math.floor(progress * target));
                element.textContent = current;
                if (current < target) {
                    requestAnimationFrame(updateCount);
                }
            };
            requestAnimationFrame(updateCount);
        });
    };

    // Chart.js configuration
    const ctx = document.getElementById('tasksChart').getContext('2d');
    const tasksChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom'],
            datasets: [{
                label: 'Tareas Completadas',
                data: [12, 19, 3, 5, 2, 3, 10],
                backgroundColor: 'rgba(81, 78, 224, 0.18)', /* Slightly more opaque fill */
                borderColor: 'var(--primary-color-end)',
                borderWidth: 4, /* Thicker line */
                fill: true,
                tension: 0.5, /* Smoother curve */
                pointBackgroundColor: 'var(--primary-color-end)',
                pointBorderColor: '#fff',
                pointBorderWidth: 3, /* Thicker point border */
                pointRadius: 7, /* Larger points */
                pointHoverRadius: 10, /* Even larger on hover */
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'var(--primary-color-start)',
                cubicInterpolationMode: 'monotone', /* Even smoother curve interpolation */
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    align: 'end',
                    labels: {
                        font: {
                            family: 'Inter',
                            size: 15,
                            weight: '600'
                        },
                        color: 'var(--text-dark)',
                        boxWidth: 25, /* Larger color box */
                        boxHeight: 15,
                        borderRadius: 6
                    }
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(33, 37, 41, 0.95)', /* Darker, slightly more opaque tooltip */
                    titleFont: { family: 'Montserrat', size: 16, weight: '700' },
                    bodyFont: { family: 'Inter', size: 15, weight: '500' },
                    padding: 15,
                    cornerRadius: 12, /* Even more rounded tooltip */
                    displayColors: false,
                    bodySpacing: 8,
                    caretSize: 10,
                    callbacks: {
                        title: function(context) {
                            return `Día: ${context[0].label}`;
                        },
                        label: function(context) {
                            return `Tareas: ${context.raw}`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(224, 228, 232, 0.6)', /* Lighter grid lines with transparency */
                        drawBorder: false,
                        lineWidth: 1,
                        drawOnChartArea: true,
                        drawTicks: false
                    },
                    ticks: {
                        font: { family: 'Inter', size: 14, weight: '500' },
                        color: 'var(--text-muted)',
                        padding: 12,
                        callback: function(value) {
                            if (value % 5 === 0) return value;
                            return '';
                        }
                    },
                    border: { display: false }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: { family: 'Inter', size: 14, weight: '500' },
                        color: 'var(--text-muted)',
                        padding: 12
                    },
                    border: { display: false }
                }
            }
        }
    });

    // Run number animation on page load
    document.addEventListener('DOMContentLoaded', animateNumbers);
</script>
</body>
</html>