class ApplicationController < ActionController::Base
  def index

    @news_list = [
      {
        :id => 1,
        :title => 'news1'
      },
      {
        :id => 2,
        :title => 'news2'
      },
      {
        :id => 3,
        :title => 'news3'
      },
    ]
  end
end
