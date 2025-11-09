import ExperienciaItem from "./ExperienciaItem";

interface ExperienciaData {
    empresa: string;
    periodo: string;
    cargo: string;
    descripcion?: string;
    ascensos?: AscensoInterface[];
}

interface AscensoInterface {
    periodo: string;
    cargo: string;
    descripcion?: string;
    esAscenso: boolean;
}

const experienciaData : ExperienciaData[] = [
  {
    empresa: "Banco Continental S.A.E.C.A",
    periodo: "Febrero 2025 - Presente",
    cargo: "Desarrollador Frontend",
    descripcion: "Responsable del mantenimiento y la optimización de la aplicación móvil nativa/híbrida (Android e iOS) y de la plataforma web del banco. Me enfoco en asegurar la consistencia de la UI/UX y la integración eficiente con las APIs de backend.",
    // Array para los ascensos o roles internos (profundidad 1)
    // ascensos: [
    //   {
    //     periodo: "Enero 2022 - Presente",
    //     cargo: "Desarrollador Full-stack Senior",
    //     descripcion: "Promovido a Senior, asumiendo mayor responsabilidad en la arquitectura de microservicios y mentoría de desarrolladores junior.",
    //     esAscenso: true,
    //   },
    //   {
    //     periodo: "Enero 2020 - Diciembre 2021",
    //     cargo: "Desarrollador Full-stack Junior",
    //     descripcion: "Inicio de carrera desarrollando y manteniendo interfaces de usuario con React y APIs RESTful con Node.js.",
    //     esAscenso: true,
    //   },
    // ],
  },
//   {
//     empresa: "Otra Empresa Consultora",
//     periodo: "Julio 2018 - Diciembre 2019",
//     cargo: "Desarrollador Frontend",
//     descripcion: "Colaboré en diversos proyectos para clientes externos, especializándome en la creación de interfaces de usuario interactivas.",
//     // Este no tiene ascensos, por lo tanto, el array 'ascensos' puede ser omitido o vacío.
//     // ascensos: [],
//   },
];

function Experiencia() {
  return (
    <section className='experience glass' id="experiencia">
        <h2>Experiencia</h2>
        <div className="experience__items-container">
            {experienciaData.map((empresa, index) => (
                <ExperienciaItem
                    key={index} // Clave única para React
                    empresa={empresa.empresa}
                    periodo={empresa.periodo}
                    cargo={empresa.cargo}
                    descripcion={empresa.descripcion ?? ''}
                >
                    {empresa.ascensos && empresa.ascensos.map((ascenso, ascIndex) => (
                    <ExperienciaItem
                        key={`${index}-${ascIndex}`} // Clave única anidada
                        periodo={ascenso.periodo}
                        cargo={ascenso.cargo}
                        descripcion={ascenso.descripcion ?? ''}
                        esAscenso={ascenso.esAscenso}
                    />
                    ))}
                </ExperienciaItem>
            ))}
        </div>
    </section>
  );
}

export default Experiencia
