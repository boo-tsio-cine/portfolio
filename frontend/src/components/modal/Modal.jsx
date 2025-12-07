import Button from "@mui/material/Button";
import Dialog from "@mui/material/Dialog";
import DialogContent from "@mui/material/DialogContent";
import DialogContentText from "@mui/material/DialogContentText";
import DialogTitle from "@mui/material/DialogTitle";
import { Fragment, useState } from "react";

export function Modal({title,content,langage}){
     const [open, setOpen] = useState(false);
    
       const handleClickOpen = () => {
        setOpen(true);
      };
    
      const handleClose = () => {
        setOpen(false);
      };
    return <>
    
         <Fragment>
            <Button variant='outlined' onClick={handleClickOpen}>Voir Détail</Button>
            <Dialog
                                open={open}
                                onClose={handleClose}
                                aria-labelledby='alert-dialog-title'
                                aria-describedby="alert-dialog-description"
                            >
                <DialogTitle
                                    id="alert-dialog-title"
                                >
                                    {title}
                </DialogTitle>
                <DialogContent>
                    <DialogContentText>
                       {content} <br></br> {langage}
                    </DialogContentText>
                </DialogContent>
                                
             </Dialog>
        </Fragment>
    </>
}