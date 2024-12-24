import { useEffect, useRef, useState } from 'react';
import './App.css'

function App() {
  const videoRef = useRef<HTMLVideoElement | null>(null);
  const maxPlays:number = 5; // Número máximo de reproducciones
  const [playCount, setPlayCount] = useState(0); // Contador de reproducciones
  const [timer, setTimer] = useState<NodeJS.Timeout | null>(null); // Guardar el ID del temporizador

  useEffect(() => {
    const video:HTMLVideoElement | null = videoRef.current;

    if (video) {
      const handleLoadedMetadata = () => {
        if (timer) clearTimeout(timer); // Limpia cualquier temporizador previo
        const totalTime:number = video.duration * maxPlays * 1000; // Tiempo total para 5 reproducciones
        const newTimer:NodeJS.Timeout = setTimeout(() => {
          video.pause(); // Pausar el video después del tiempo calculado
          setPlayCount(maxPlays); // Asegurarse de actualizar el contador
        }, totalTime);
        setTimer(newTimer); // Guardar el temporizador
      };

      const handleClick = () => {
        if (playCount >= maxPlays) {
          setPlayCount(0); // Reiniciar el contador de reproducciones
        }
        video.play(); // Reproducir el video
        handleLoadedMetadata(); // Configurar nuevamente el temporizador
      };

      // Registrar eventos
      video.addEventListener("loadedmetadata", handleLoadedMetadata);
      video.addEventListener("click", handleClick);

      // Limpieza al desmontar el componente
      return () => {
        video.removeEventListener("loadedmetadata", handleLoadedMetadata);
        video.removeEventListener("click", handleClick);
        if (timer) clearTimeout(timer);
      };
    }
  }, [playCount, timer]);
  return (
    <section className='App'>
        <header className='header'>
          <h1>Angel López</h1>
          <nav className='nav'>
            <ul>
              <li><a href="#inicio">Inicio</a></li>
              <li><a href="#trayectoria">Trayectoria</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>
          </nav>
        </header>
        <main>
          <section className='presentation glass' id="inicio">
            <h2>Acerca de mí</h2>
            <p>Soy un <b>Desarrollador Web Full Stack</b> apasionado por los desafíos tecnológicos y el aprendizaje constante. Combino habilidades en <b>Frontend, Backend</b> y <b>Diseño UX/UI</b> para crear soluciones completas, funcionales y atractivas. Mi enfoque es construir experiencias que no solo cumplan con los requisitos técnicos, sino que también sean intuitivas y útiles para los usuarios.</p>
          </section>
          <section className='trayectory glass' id="trayectoria">
            <h2>Trayectoria</h2>
            <p>A lo largo de mi trayectoria, he trabajado en proyectos freelance donde lideré todas las etapas del desarrollo en colaboración con <b>Christian López</b>. Por ejemplo, construimos una <b>herramienta de aprendizaje virtual</b> desde cero llamado <a href="https://ellysmemory.com" target='_blank'>ellysmemory</a>, en la que desarrollamos un sistema de exámenes interactivos con cronómetro, estadísticas de progreso y gestión administrativa mediante una <b>API PHP</b> robusta y un diseño UX/UI atractivo. Este proyecto es especialmente significativo para mí porque combina tecnología con educación, ayudando a estudiantes a prepararse para exámenes de ingreso de manera eficiente y organizada.</p>
            <div className='gif'>
              <video autoPlay loop muted playsInline ref={videoRef}>
                <source src="/ellysmemory.mp4" type="video/mp4" />
                  Tu navegador no soporta la etiqueta de video.
              </video>
            </div>
            <h3>Además, he desarrollado proyectos como:</h3>
            <ul>
              <li><b>Biblioteca Virtual Escolar:</b> Un sistema utilizado como proyecto de fin de curso por estudiantes de Informática.</li>
              <li><b>Biblioteca Jurídica:</b> Una plataforma para facilitar el acceso rápido y cómodo a información legal.</li>
            </ul>
          </section>
          <section className='skills glass'>
            <h2>Habilidades Técnicas</h2>
            <ul>
              <li><b>Lenguajes:</b> HTML, CSS, JavaScript, TypeScript, PHP y MySQL.</li>
              <li><b>Frameworks:</b> Actualmente me especializo en <b>React</b> y utilizo <b>Figma</b> para diseñar interfaces intuitivas.</li>
              <li><b>Metodologías:</b> Trabajo con APIs RESTful y práctico un enfoque modular y organizado para asegurar la escalabilidad de mis proyectos.</li>
            </ul>
            <br />
            <p>También soy <b>docente de programación</b>, lo que ha fortalecido mis habilidades de comunicación y liderazgo. Estas habilidades me permiten trabajar en equipo, adaptarme rápidamente y explicar conceptos técnicos de manera clara y comprensible. Mi experiencia enseñando lógica de programación me ha dado una agilidad especial para resolver problemas complejos con rapidez.</p>
          </section>
          <section className='professional glass'>
            <h2>Objetivo profesional</h2>
            <p>Mi meta es formar parte de un equipo de desarrollo en una empresa que valore el aprendizaje continuo y los proyectos impactantes. Estoy listo para incorporarme inmediatamente en un entorno <b>híbrido, remoto o presencial.</b> A mediano plazo, aspiro a liderar un equipo grande de desarrollo, utilizando mi experiencia y pasión para guiar proyectos que hagan una diferencia.</p>
          </section>
          <section className='interests glass'>
            <h2>Intereses y logros personales</h2>
            <p>Soy una persona curiosa por naturaleza. En mi tiempo libre, disfruto estudiar cómo funcionan las cosas y encontrar formas de mejorarlas. Además, obtuve el tercer puesto en una competencia de Física, un logro que refleja mi habilidad para analizar y resolver problemas de manera lógica y estructurada.</p>
          </section>
        </main>
        <footer className="footer" id='contacto'>
          <div className="footer-container">
            <h2>Contáctame</h2>
            <p>¿Tienes alguna pregunta o propuesta? Envíame un mensaje.</p>
            <form className="contact-form" action="https://formsubmit.co/angellopezalarcon832@gmail.com" method="POST">
              <input type="text" name="_honeypot" style={{display: "none"}} />
              <input type="hidden" name="_next" value="http://localhost:5173/" />
              <div className="form-group">
                <label htmlFor="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre" required />
              </div>
              <div className="form-group">
                <label htmlFor="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required />
              </div>
              <div className="form-group">
                <label htmlFor="message">Mensaje</label>
                <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí" rows={5} required></textarea>
              </div>
              <button type="submit" className="btn">Enviar</button>
            </form>
            <div className="social-links">
              <a href="https://www.linkedin.com/in/angel-l%C3%B3pez-071851217/" target="_blank" className="social-link">
                <img src="linkedin.svg" alt="LinkedIn" /> LinkedIn
              </a>
            </div>
            <p className="footer-credits">© 2024 Angel López | Desarrollador Web Full Stack</p>
          </div>
        </footer>
    </section>
  )
}

export default App
