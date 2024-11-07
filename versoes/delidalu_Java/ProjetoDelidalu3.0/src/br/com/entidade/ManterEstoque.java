/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.entidade;

import br.com.controle.Estoque;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
public class ManterEstoque extends DAO{
    public void inserir(Estoque es) throws Exception {
    try {
    abrirBanco();
    String query = "INSERT INTO estoque(id_produto,tipo_estoque,preco_unidade,quantidade_estoque) "
            + "values(null,?,?,?)";
    pst=(PreparedStatement) con.prepareStatement(query);
    pst.setString(1, es.getTipo_estoque());
    pst.setDouble(2, es.getPreco_unidade());
    pst.setInt(3, es.getQuantidade_estoque());
    pst.execute();
    fecharBanco();
    } catch (Exception e) {
        System.out.println("Erro " + e.getMessage());
    }
    }
    
    public void deletar(Estoque es) throws Exception{
         abrirBanco();
         String query = "delete FROM estoque where id_produto=?";
         pst=(PreparedStatement) con.prepareStatement(query);
         pst.setInt(1, es.getId_produto());
         pst.execute();
        fecharBanco();   
     }
    
   public ArrayList<Estoque> PesquisarTudo () throws Exception {
       ArrayList<Estoque> estoques = new ArrayList<Estoque>();
         try{
         abrirBanco();  
         String query = "select * FROM estoque";
         pst = (PreparedStatement) con.prepareStatement(query);
         ResultSet tr = pst.executeQuery();
         Estoque es ;
         while (tr.next()){               
           es = new Estoque();
           es.setId_produto(tr.getInt("id_produto"));
           es.setTipo_estoque(tr.getString("tipo_estoque"));
           es.setPreco_unidade(tr.getDouble("preco_unidade"));
           es.setQuantidade_estoque(tr.getInt("quantidade_estoque"));
           
           estoques.add(es);
         } 
         fecharBanco();
       }catch (Exception e){
           System.out.println("Erro " + e.getMessage());
     } 
       return estoques;
     }
   
   public void editarEstoque(Estoque es) throws Exception {
        abrirBanco();
        //JOptionPane.showMessageDialog(null, a.getNome()+ a.getEmail() + a.getIdade());
        String query = "UPDATE estoque set tipo_estoque=?,preco_unidade=?,quantidade_estoque=? where id_produto=?";
        pst = (PreparedStatement) con.prepareStatement(query);
        pst.setString(1, es.getTipo_estoque());
        pst.setDouble(2, es.getPreco_unidade());
        pst.setInt(3, es.getQuantidade_estoque());
        
        pst.setInt(4, es.getId_produto());
        pst.executeUpdate();
        fecharBanco();
    }
}
