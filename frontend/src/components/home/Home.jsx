import  "./Home.css";
import '../../App.css';

// import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
// import { faDownload } from '@fortawesome/free-solid-svg-icons';

export function Home(){
    return<div className=" gap-2 home" id="accueil">
        <div className="home-div">
            <div>
                 <div className="accueil">
                    Bonjour<span>.  </span>
                </div>
                <div className="present">
                    Je suis<br></br> <span>Tsiory</span> Lovaniaina RANDRIANOMENJANAHARY
                </div>
                <div className="job">
                    Développeur web
                </div>
               <a 
                    href="/CV_RANDRIANOMENJANAHARY_Tsiory_Lovaniaina.pdf"
                    download="CV_Tsiory.pdf"
                    className="cv"
                    
                >
                    <div className="button">
                        {/* <FontAwesomeIcon icon={faDownload} /> */}
                        Télécharger mon CV
                    </div>
               </a>
            </div>
           
                        
        </div>
         <div className="home-photo">
            <div className="photo-bloc">
                <img src="https://scontent.ftnr2-2.fna.fbcdn.net/v/t39.30808-6/473741411_3958995437706316_8843498419081789774_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeFJ21oPQ9xA4NLMLLaasBNTlDd9cgShkQ2UN31yBKGRDQSEGWEIpr25zvOZ4dkzEcereg87FwbC6CTz1B2OY0dW&_nc_ohc=qTFRZHUPOIAQ7kNvwGruxoF&_nc_oc=AdkN5v5_omHGUEkGT3r8LY6UloFcEFfhvVR7uqpZuo2wf4zcQRPouwTda1VzQGhXk0k&_nc_zt=23&_nc_ht=scontent.ftnr2-2.fna&_nc_gid=D24ZSNS-g3wa5BwwPtx-sw&oh=00_Afm5Ks0mDpv1ymaxFIb0BHPUohDxK1WXZDzBcH3U0qMGtA&oe=69387FE2" alt="" />

            </div>
          {/* <img src="/logo192.png" alt="" /> */}
                       
        </div>
    
    </div>
}