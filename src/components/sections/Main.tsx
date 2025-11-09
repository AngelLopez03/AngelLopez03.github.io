import { AcercaDe, Experiencia, Habilidades, Intereses, Profesional, Proyectos } from ".."
import { MainInterface } from "../../interfaces"

function Main({ videoRef } : MainInterface) {
    return (
        <main>
            <AcercaDe />
            <Experiencia />
            <Habilidades />
            <Proyectos videoRef={ videoRef } />
            <Profesional />
            <Intereses />
        </main>
    )
}

export default Main
