/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package br.com.entidade;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.DriverManager;
import java.util.logging.Level;
import java.util.logging.Logger;

public class DAO {
 Connection con;// criação do objeto conexao
    PreparedStatement pst;//criação do objeto preparação de ambiente
    ResultSet rs;// criação do objeto que recebe resultado
    public void abrirBanco() throws SQLException {// criando metodo para acessar o banco
      try {
        Class.forName("com.mysql.cj.jdbc.Driver");//classe para utilização do arquivo com configurções do serivdor mysql
        String url = "jdbc:mysql://localhost/delidalu";// drive servidor e banco de dados a serem utilizados e indicação do banco a ser utilizado
        String user ="root";// usuario do banco de dados
        String senha ="";//senha do usuario do banco de dados    
        con=(Connection) DriverManager.getConnection(url,user,senha);//metodo que usa os parametros para conectar com o banco
         System.out.println("Conectado ao banco de dados ");
      } catch (ClassNotFoundException ex) {//tratamento de erro de drive
          System.out.println("Classe não encontrada, adicione o driver nas bibliotecas.");
        Logger.getLogger(DAO.class.getName()).log(Level.SEVERE, null, ex);
        } catch(SQLException e) {//tratamento de erro de SQL
          System.out.println(e);
          throw new RuntimeException(e);
       } 
     }    
    
    public void fecharBanco() throws Exception{//criando metodo que fechao conexão com o banco
       if (pst!= null) { //limpando os dados de conexão   
            pst.close();//fechando o ambiente de conexão
            System.out.println("Execuçao da Query fechada\n");
    }    }   
}