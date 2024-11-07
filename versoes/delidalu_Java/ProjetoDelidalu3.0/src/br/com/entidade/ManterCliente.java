/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.entidade;

import br.com.controle.Cliente;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
public class ManterCliente extends DAO{
    public void inserir(Cliente c) throws Exception {
    try {
    abrirBanco();
    String query = "INSERT INTO cliente(id_cliente,cpf,nome,endereco,email,telefone) "
            + "values(null,?,?,?,?,?)";
    pst=(PreparedStatement) con.prepareStatement(query);
    pst.setString(1, c.getCpf());
    pst.setString(2, c.getNome());
    pst.setString(3, c.getEndereco());
    pst.setString(4, c.getEmail());
    pst.setString(5, c.getTelefone());
    pst.execute();
    fecharBanco();
    } catch (Exception e) {
        System.out.println("Erro " + e.getMessage());
    }
    }
    
    public void deletar(Cliente c) throws Exception{
         abrirBanco();
         String query = "delete FROM cliente where id_cliente=?";
         pst=(PreparedStatement) con.prepareStatement(query);
         pst.setInt(1, c.getId_cliente());
         pst.execute();
        fecharBanco();   
     }
    
   public ArrayList<Cliente> PesquisarTudo () throws Exception {
       ArrayList<Cliente> clientes = new ArrayList<Cliente>();
         try{
         abrirBanco();  
         String query = "select * FROM cliente";
         pst = (PreparedStatement) con.prepareStatement(query);
         ResultSet tr = pst.executeQuery();
         Cliente c ;
         while (tr.next()){               
           c = new Cliente();
           c.setId_cliente(tr.getInt("id_cliente"));
           c.setCpf(tr.getString("cpf"));
           c.setNome(tr.getString("nome"));
           c.setEndereco(tr.getString("endereco"));
           c.setEmail(tr.getString("email"));
           c.setTelefone(tr.getString("telefone"));
           
           clientes.add(c);
         } 
         fecharBanco();
       }catch (Exception e){
           System.out.println("Erro " + e.getMessage());
     } 
       return clientes;
     }
   
   public void editarCliente(Cliente c) throws Exception {
        abrirBanco();
        //JOptionPane.showMessageDialog(null, a.getNome()+ a.getEmail() + a.getIdade());
        String query = "UPDATE cliente set cpf=?,nome=?,endereco=?,email=?,telefone=? where id_cliente=?";
        pst = (PreparedStatement) con.prepareStatement(query);
        pst.setString(1, c.getCpf());
        pst.setString(2, c.getNome());
        pst.setString(3, c.getEndereco());
        pst.setString(4, c.getEmail());
        pst.setString(5, c.getTelefone());
        
        pst.setInt(6, c.getId_cliente());
        pst.executeUpdate();
        fecharBanco();
    }   
}
