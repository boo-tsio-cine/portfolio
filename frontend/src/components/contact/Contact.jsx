
import { useState } from "react";
import axios from "axios";
import "./Contact.css";

export function Contact(){

    const[form,setForm]=useState({
        mail:"",
        phone:"",
        message:""
    });

    const [success,setSuccess] = useState("");
    const [error,setError] = useState("");

    
    const handleChange = (e) => {
        setForm({ ...form, [e.target.name]: e.target.value });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        axios.post("http://127.0.0.1:8000/api/contact", form)
            .then((res)=>{
                setSuccess("Message envoyé avec succès");
                setError("");
            })
            .catch((err) => {
                setError("Erreur lors de l'envoi du message");
                setSuccess("");
            });
       
    };

    return<div className="contact" id="contact">
        <div className="contact-title">
            <h1>
                Contact
            </h1>
        </div>
        <div className="d-flex">
            <div className="social-media">
                <ul>
                     <li>
                        <i className="fab fa-brands fa- fa-whatsapp">  +261347463409</i>
                     </li>
                    <li>
                        <i className="fab fa-brands fa- fa-facebook-messenger">  Tsiory Randrianomenjanahary</i> 
                    </li>
                   <li>
                    <i className="fa fa-sharp-duotone fa-regular fa-envelope">   tsiorrandrianomenjanahary</i>
                    </li> 
                </ul>
               
                
            </div>
            <div className="contact-form">
                 <form onSubmit={handleSubmit}>
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input 
                            type="email" 
                            name="mail" 
                            id="email" 
                            value={form.mail}
                            onChange={handleChange}
                            className="form-control" 
                            placeholder="votre.email@example.com"  
                            required
                        />
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de téléphone</label>
                        <input 
                            type="text" 
                            name="phone" 
                            id="tel" 
                            value={form.phone}
                            onChange={handleChange}
                            className="form-control" 
                            placeholder="+261 32 123 4567" 
                            required  
                        />
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                       <textarea
                            name="message" // doit correspondre à form.message
                            className="form-control"
                            value={form.message}
                            onChange={handleChange}
                            rows="5"
                            placeholder="Écrivez votre message..."
                            required
                        ></textarea>

                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-submit btn-lg">Envoyer</button>
                    </div>
                    {
                        success && <p style={{color:'green'}}>{success}</p>
                    }
                    {
                        error && <p style={{color:'red'}}>{error}</p>
                    }
                </form>
            </div>
        </div>
    </div>
}