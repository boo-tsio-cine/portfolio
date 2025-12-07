import "./Nav.css";
import '../../App.css';


export function Nav(){
    return<div className="navfixed">
        <nav className="navbar navbar-expand-lg">
            <div className="container ">
                
                <a className="logo" href="#">
                    Tsiory
                </a>

            
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span className="navbar-toggler-icon"></span>
                </button>


                <div className="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul className="navbar-nav">
                    <li className="nav-item">
                        <a className=" linko" href="#accueil">Accueil</a>
                    </li>
                    <li className="nav-item">
                        <a className=" linko" href="#apropos">A propos</a>
                    </li>
                    <li className="nav-item">
                        <a className=" linko" href="#projet">Projet</a>
                    </li>
                    <li className="nav-item">
                        <a className=" linko" href="#contact">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
    </div>

}