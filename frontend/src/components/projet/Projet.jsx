import { useEffect, useState } from 'react'
import { Modal } from '../modal/Modal'
import axios from "axios";
import './Projet.css'



export function Projet(){
    const [projects, setProjects] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/projets")
            .then((response) => {
                setProjects(response.data);
                setLoading(false);
            })
            .catch((err)=>{
                setError(err.message);
                setLoading(false);
            });
    }, []);
    
    if(loading) return <p>Changement........</p>
    if(error) return <p>Erreur : {error}</p>


    return<div className="projet" id="projet">
        <div className="projet-title">
            <h1>Projet</h1>
        </div>
        <div className="projet-list">
         
            {projects.map((p) => (
                <div className="cart" key={p.id}>
                    <div className="card-img">
                        <img src={`http://127.0.0.1:8000/upload/${p.photo}`} alt="" />
                    </div>
                    <div className="card-content">
                        <h3 className="content-title">
                            {p.name}
                        </h3>
                        <p>
                            {p.annee}
                        </p>
                        <div className="link">
                           
                                <Modal content={p.descri} title={p.name} langage={p.langage}></Modal>
                            
                            
                            {p.link && (
                                <a href={`https://${p.link}`} target="_blank" rel="noopener noreferrer">Voir Projet</a>
                            )}
                           
                        </div>
                    </div>
                </div>
            ))}
      
        </div>
    </div>
}