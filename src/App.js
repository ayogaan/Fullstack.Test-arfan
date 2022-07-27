//import logo from './logo.svg';
import './App.css'
import './form.css'

import {Form, Card, Container, Button} from 'react-bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faAngleLeft} from '@fortawesome/free-solid-svg-icons'
import axios from "axios";
import React, {useState,useEffect } from "react";
function App() {
const uri = "https://hris.widyaskilloka.com/api/v1/master/company-types"; 
const [item, setItem] = useState();


useEffect(() => {
  axios.get(uri).then(response =>{
    setItem(response.data.data)
  })
}, [])

  
console.log(item)


  
  return (
    <div className="App ">
      <div className ="app flex-row align-items-center background-login center" style={{height: "auto", padding: "10px"}}  >
      <Container>
        <div className =" flex-row justify-content-center row">
          <div className = "col-sm-8 col-md-9">
          
      <Card className=" shadow border-0" style = {{borderRadius:"20px", padding:"20px", height: "auto"}}>
      
        
      <Card.Body className=" flex-row justify-content-center row">
      <Form  style ={{border: "0px solid #b2bbce", width:"80%"}}>
      <div className="text-center mb-5">

      <img src="https://hris.widyaskilloka.com/static/media/logo.ba215251.png"  style={{width: 220, height: "auto"}} alt="logo-widya-skilloka"></img>
      </div>
        <h5><b>Data Perusahaan</b></h5>
        <div className="row">
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label    htmlFor="companyName" className="text-secondary input-label form-label">Nama Perusahaan</label>
          <input label="Nama Perusahaan" id="companyName" name="companyName" type="text" className="form-control" value=""></input>
          </div>
        </div>
        
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Website Perusahaan</label>
          <input label="Nama Perusahaan" id="companyName" name="companyName" type="text" className="form-control" value=""></input>
          </div>
        </div>

        </div>

        <div className="row">
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Nomor Telepon Perusahaan</label>
          <div className="input-group">
            <div className="input-group-prepend">
              <span className="input-group-text">+</span>
              </div>
              <input pattern="[0-9]*" inputmode="numeric" type="text" className="form-control" name="companyPhone" id="companyPhone" placeholder="62">
                </input>
              </div>

          </div>
        </div>

        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Bidang Perusahaan</label>
          <select className="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  {
      item.map((x)=>{
        return(
        <option value={x.id}>{x.name}</option>
        )
      })
    }
  
  
</select>

          <div className="invalid-feedback">Isian tidak boleh kosong.</div>
          </div>
        </div>
        </div>
        <hr></hr>
        <h5  ><b>Data Diri Anda</b></h5>
        <div className="row">
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Nama Lengkap</label>
          <input label="Nama Perusahaan" id="companyName" name="companyName" type="text" className="form-control" value=""></input>
          </div>
        </div>
        
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Nama Panggilan</label>
          <input label="Nama Perusahaan" id="companyName" name="companyName" type="text" className="form-control" value=""></input>
          </div>
        </div>

        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Email</label>
          <input label="Nama Perusahaan" id="companyName" name="companyName" type="text" className="form-control" value=""></input>
          </div>
        </div>

       
        <div className="col-sm-6">
          <div className="w-100 form-group">
          <label   htmlFor="companyName" className="text-secondary input-label form-label">Telepon</label>
          <div className="input-group">
            <div className="input-group-prepend">
              <span className="input-group-text">+</span>
              </div>
              <input pattern="[0-9]*" inputmode="numeric" type="text" className="form-control" name="companyPhone" id="companyPhone" placeholder="62">
                </input>
              </div>

          </div>
        </div>

        
        </div>
        <div className="row">
        <div className="col-sm-12">
          <Button className="btn-secondary mt-5" style={{    width: "100%",
    padding: "10px 0",
    color: "#fff",
    backgroundColor: "#335877"}}>Register</Button>

<div className="mt-5"><a style={{textDecoration:"none"}} href="/login"><FontAwesomeIcon icon={faAngleLeft} /> Ke Halaman Login</a></div>

        </div>
        </div>
        </Form>
      </Card.Body>
     
    </Card>
  
    </div>
    </div>
 
    </Container>
    </div>
    </div>
  );
}

export default App;

