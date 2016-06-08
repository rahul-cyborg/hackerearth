temp = gets.chomp.strip.split(' ').map(&:to_i)

n = temp[0]
m = temp[1]

input = []
dummy = []

n.times do
  t  = gets.chomp.strip.split(' ').map(&:to_i)
  dummy << t
  input << t.inject(:+)
end

data = input[0,m]

#print data
out = []

if n <= m
  out = (1..n).to_a
else
  (0...n).each do |i|
    if i < m 
      out << (i + 1) 
    else
      tmp = dummy[i][0]
      #puts 'tmp = ' + tmp.to_s
      flag = 0
      (0...data.length).each do |k|
        if data[k] <= tmp
           data[k] = tmp + dummy[i][1]
           out << (k + 1) 
           flag = 1
           break;
        end
      end
      out << "-1" if flag == 0
    end
  end
end

print out.join(' ')