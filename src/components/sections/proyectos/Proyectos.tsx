import { MainInterface } from "../../../interfaces"

function Proyectos( { videoRef } : MainInterface ) {
    return (
        <section className='trayectory glass' id="trayectoria">
            <h2>Proyectos</h2>
            <p>He trabajado en proyectos freelance en colaboración con <b>Christian López</b>. Por ejemplo, construimos una <b>herramienta de aprendizaje virtual</b> desde cero llamado <a href="https://ellysmemory.com" target='_blank'>ellysmemory</a>, en la que desarrollamos un sistema de exámenes interactivos con cronómetro, estadísticas de progreso y gestión administrativa mediante una <b>API PHP</b> robusta y un diseño UX/UI atractivo. Este proyecto es especialmente significativo para mí porque combina tecnología con educación, ayudando a estudiantes a prepararse para exámenes de ingreso de manera eficiente y organizada.</p>
            <div className='gif'>
            <video autoPlay loop muted playsInline ref={videoRef}>
                <source src="/ellysmemory.mp4" type="video/mp4" />
                Tu navegador no soporta la etiqueta de video.
            </video>
            </div>
            <div style={{marginBottom: "20px"}}>
            <h3 style={{marginBottom: "5px"}}>Componente de React <span style={{background: "#5559", padding: "0px 5px"}}>rc-form</span></h3>
            <p>He desarrollado un componente de formulario versátil, <a href="https://www.npmjs.com/package/@modular-web/rc-form" target='_blank'>rc-form</a>, que puede utilizarse tal cual o personalizarse según las necesidades específicas del proyecto. Este componente forma parte de la organización <b>@modular-web</b> en npm, ofreciendo flexibilidad y facilidad de uso para cualquier aplicación.</p>
            <div style={{width: "100%", display: "flex", justifyContent: "center"}}>
                <img src="rc-form.png" alt="@modular-web/rc-form" style={{marginTop: "20px"}} width={"80%"}/>
            </div>
            </div>
            <h3 style={{marginBottom: "5px"}}>Participe en otros proyectos como:</h3>
            <ul>
            <li><b>Biblioteca Virtual Escolar:</b> Un sistema utilizado como proyecto de fin de curso por estudiantes de Informática.</li>
            <li><b>Biblioteca Jurídica:</b> Una plataforma para facilitar el acceso rápido y cómodo a información legal.</li>
            </ul>
        </section>
    )
}

export default Proyectos
