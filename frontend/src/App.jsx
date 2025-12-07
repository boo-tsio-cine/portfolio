// import { About } from "./components/about/About";
import { About } from "./components/about/About";
import { Contact } from "./components/contact/Contact";
import { Home } from "./components/home/Home";
import { Nav } from "./components/nav/Nav";
import { Projet } from "./components/projet/Projet";
import { Tech } from "./components/technologie/Tech";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";


function App(){


  return<>
    <div>
      <Nav/>
      <Home/>
      <About/>
      <Tech />
      <Projet/>
      <Contact/>
      <FontAwesomeIcon icon="fa-user" style={{color:"white"}}/>
    </div>
  </>
}
export default App;