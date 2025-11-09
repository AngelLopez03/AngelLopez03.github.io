import { useEffect, useRef, useState } from 'react';
import './App.css'
import { Header, Main } from './components';

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
        if(video.paused) {
          video.play(); // Reproducir el video
        } else {
          video.pause(); // Pausar el video si está reproduciendo
        }

        handleLoadedMetadata(); // Configurar nuevamente el temporizador
      };

      const handleDoubleClick = () => {
        if(!document.fullscreenElement) { // Si no está en pantalla completa
          if(video.requestFullscreen) {
            video.requestFullscreen(); // Solicitar pantalla completa en navegadores compatibles
          }
        } else { // Si está en pantalla completa
          if(document.exitFullscreen ) {
            document.exitFullscreen(); // Salir de pantalla completa en navegadores compatibles
          }
        }
      }

      // Registrar eventos
      video.addEventListener("loadedmetadata", handleLoadedMetadata);
      video.addEventListener("click", handleClick);
      video.addEventListener("dblclick", handleDoubleClick);

      // Limpieza al desmontar el componente
      return () => {
        video.removeEventListener("loadedmetadata", handleLoadedMetadata);
        video.removeEventListener("click", handleClick);
        video.removeEventListener("dblclick", handleDoubleClick);
        if (timer) clearTimeout(timer);
      };
    }
  }, [playCount, timer]);
  return (
    <section className='App'>
        <Header />
        <Main videoRef={ videoRef } />
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
