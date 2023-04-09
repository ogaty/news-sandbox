class CreateNews < ActiveRecord::Migration[7.0]
  def change
    create_table :news do |t|
      t.string :title
      t.text :body
      t.integer :status

      t.timestamps
    end
  end
end
