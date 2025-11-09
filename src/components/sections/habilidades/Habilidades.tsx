const habilidadesData = [
    {
        titulo: 'Lenguajes de Programación',
        contenido: [
        'HTML, CSS, JavaScript, TypeScript, PHP, C#, C++, Ruby, Kotlin, Swift.',
        'Nota: Manejo los fundamentales (HTML y CSS) para toda la base web.', // Se puede dejar este como nota
        ],
        // Nuevo campo: 'items' para la lista anidada
        items: [
        '<b>Dominio en lenguajes Core:</b> JavaScript, TypeScript, PHP, C#, C++, Ruby.',
        '<b>Especialización en lenguajes Mobile:</b> Kotlin y Swift.',
        '<b>Nota:</b> Manejo los fundamentales (HTML y CSS) para toda la base web.',
        ]
    },
    {
        titulo: 'Frameworks y Plataformas',
        items: [
        'Especializado en <b>React</b> para Web y <b>React Native</b> para Mobile.',
        'Backend con <b>Node.js</b> y la plataforma <b>.NET Framework</b> (incluyendo Minimal API).',
        'Estilos con el framework <b>Tailwind CSS</b>.',
        ]
    },
    {
        titulo: 'Bases de Datos y Almacenamiento',
        items: [
        'Relacionales (SQL): <b>MySQL</b>, <b>PostgreSQL</b> y <b>ORACLE</b>.',
        'NoSQL y Cloud: <b>MongoDB</b> y <b>Firebase</b> (Manejo de DB, AppDistribution y Analytics).',
        ]
    },
    {
        titulo: 'DevOps e Infraestructura',
        items: [
        'Orquestación: <b>Kubernetes (K8s)</b> y <b>Docker</b>.',
        'CI/CD: <b>Azure DevOps</b>.',
        'Control de Versiones: <b>Git</b> y <b>GitHub Desktop</b>.',
        ]
    },
    {
        titulo: 'Metodología y Herramientas Complementarias',
        items: [
        'Enfoque modular y escalable (uso de APIs RESTful).',
        'Diseño de UI/UX con <b>Figma</b>.',
        'Productividad: VS Code, xcode, Word, Excel, PowerPoint.',
        ]
    },
];

function Habilidades() {
    return (
        <section className='skills glass'>
            <h2>Habilidades Técnicas</h2>
            
            <ul className="skills__list-container">
                {/* 1. Mapeamos las categorías principales (Lenguajes, Frameworks, etc.) */}
                {habilidadesData.map((item, index) => (
                    <li key={index} className="skills__category-item">
                        {/* Título de la categoría */}
                        <b>{item.titulo}</b>
                        
                        {/* 2. Lista anidada: Renderizamos los ítems de esa categoría */}
                        {item.items && (
                            <ul className="skills__sub-list">
                                {item.items.map((subItem, subIndex) => (
                                    <li 
                                        key={subIndex} 
                                        className="skills__sub-list-item"
                                        // Usamos dangerouslySetInnerHTML para renderizar la negrita (<b>)
                                        dangerouslySetInnerHTML={{ __html: subItem }} 
                                    />
                                ))}
                            </ul>
                        )}
                    </li>
                ))}
            </ul>

            <br />
            
            <p className="skills__value-add">
                También soy <b>docente de programación</b>, lo que ha fortalecido mis habilidades de comunicación y liderazgo. Estas habilidades me permiten trabajar en equipo, adaptarme rápidamente y explicar conceptos técnicos de manera clara y comprensible. Mi experiencia enseñando lógica de programación me ha dado una agilidad especial para resolver problemas complejos con rapidez.
            </p>
        </section>
    )
}

export default Habilidades
