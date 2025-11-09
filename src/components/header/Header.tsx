import { HeaderTypes } from "../../interfaces";

const header : HeaderTypes = {
    title: {
        item: "Angel López"
    },
    menu: [
        {
            item: "Inicio",
            link: "#inicio"
        },
        {
            item: "Experiencia",
            link: "#experiencia"
        },
        {
            item: "Proyectos",
            link: "#trayectoria"
        },
        {
            item: "Contacto",
            link: "#contacto"
        },
    ]
}

function Header() {
    const {title, menu} = header;
    return (
        <header className='header'>
                {title.link ?
                    (
                        <h1><a href={title.link}>{title.item}</a></h1>
                    ):
                    (
                        <h1>{title.item}</h1>
                    )
                }
                
                <nav className='nav'>
                <ul>
                    {menu.map((menu, index) => (
                        <li key={index}>
                            <a href={menu.link}>{menu.item}</a>
                        </li>
                    ))}
                </ul>
            </nav>
        </header>
    )
}

export default Header;